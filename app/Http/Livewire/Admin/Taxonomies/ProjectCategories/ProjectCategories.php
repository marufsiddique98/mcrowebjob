<?php

namespace App\Http\Livewire\Admin\Taxonomies\ProjectCategories;

use App\Models\Taxonomies\ProjectCategory;
use App\Services\TaxonomyService;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Support\Str;

class ProjectCategories extends Component
{
    use WithPagination, WithFileUploads;

    public $editMode = false;
    public $name, $description, $edit_id, $image, $old_image, $slug, $status;
    public $search              = '';
    public $sortby              = 'desc';
    public $per_page            = '';
    public $per_page_opt        = [];
    public $parentId            = null; 
    public $delete_id           = null; 
    public $selectedCategories  = [];
    public $selectAll           = false;
    public $allowImageSize      = false;
    public $allowImageExt       = false;

    protected $paginationTheme  = 'bootstrap';

    protected $listeners = ['deleteConfirmRecord' => 'deleteCategory'];
    
    public function mount(){
        
        $this->per_page_opt     = perPageOpt();
        $per_page_record        = setting('_general.per_page_record');
        $image_file_ext         = setting('_general.image_file_ext');
        $image_file_size        = setting('_general.image_file_size');
        $this->per_page         = !empty( $per_page_record ) ? $per_page_record : 10;
        $this->allowImageSize   = !empty( $image_file_size ) ? $image_file_size : '3';
        $this->allowImageExt    = !empty( $image_file_ext ) ?  explode(',', $image_file_ext)  : ['jpg','png'];
    }
    
    public function render(){
        
        $categories             = $this->Categories; // get mounted property
        $categories_tree        = ProjectCategory::tree()->get()->toTree()->toArray();
       
        $categories_tree = hierarchyTree($categories_tree);
        addJsVars(['categories_tree' => $categories_tree]);
        $this->dispatchBrowserEvent('initDropDown', ['categories_tree' => $categories_tree, 'parentId' => $this->parentId ]);

        $allow_image_ext        = $this->allowImageExt;
        $allow_image_size       = $this->allowImageSize;
        return view('livewire.admin.taxonomies.project-categories.categories', compact( 'categories', 'categories_tree', 'allow_image_ext', 'allow_image_size' ))->extends('layouts.admin.app');
    }

    public function getCategoriesProperty(){ // mounted property

        $project_categories = new ProjectCategory;
        if( !empty($this->search) ){
            $project_categories = $project_categories->where(function($query){
                $query->whereFullText('name', $this->search);   
                $query->orWhereFullText('description', $this->search); 
            });
        }
        return $project_categories->orderBy('id', $this->sortby)->paginate($this->per_page);
    }

    public function updatedSearch(){ // update variable value
        $this->resetPage(); // default function of pagination
    }

    public function updatedSelectAll($value){ // watch property

        if($value){
            $this->selectedCategories = $this->Categories->pluck('id')->toArray();
        }else{
            $this->selectedCategories = [];
        }
    }

    public function updatedparentId($id){
       
       $category_name =  ProjectCategory::where('id', $id)->pluck('name')->first();
        if($category_name){
            $this->parent_cate_name = $category_name;
        }
    }

    public function updatedselectedCategories(){
        $this->selectAll = false;
    }

    private function resetInputfields(){

        $this->name                     = null;
        $this->description              = null;
        $this->image                    = null;
        $this->old_image                = array();
        $this->parentId                 = null;
        $this->delete_id                = null;
        $this->slug                     = null;
        $this->status                   = null;
        $this->selectedCategories       = [];
        $this->selectAll                = false;
        $this->parent_cate_name         = null;
        $this->edit_id                  = null;
        $this->emit('updateCategroyId', $this->parentId);
    }

    public function deleteRecord($id){

        $this->delete_id = $id;
        $this->dispatchBrowserEvent('delete-category-confirm');
    }

    public function deleteAllRecord(){
        $this->dispatchBrowserEvent('delete-category-confirm');
    }

    public function removeImage(){

       $this->image     = null;
       $this->old_image = array();
    }

    public function edit($id){
        
        $record = ProjectCategory::findOrFail($id);
        $this->edit_id      = $id;
        $this->name         = $record->name;
        $this->description  = $record->description;
        $this->old_image    = !empty($record->image) ? @unserialize($record->image) : array();
        $this->parentId     = $record->parent_id;
        $this->status       = $record->status;
        $this->editMode     = true;
        $this->emit('updateCategroyId', $this->parentId);
    }

    public function update(){

        $response = isDemoSite();
        if( $response ){
            $this->dispatchBrowserEvent('showAlertMessage', [
                'type'      => 'error',
                'title'     => __('general.demosite_res_title'),
                'message'   => __('general.demosite_res_txt')
            ]);
            return;
        }

        $validated_data  = $this->validate([
            'name'              => 'required|min:5',
            'image'             => 'nullable|image|mimes:'.join(',', $this->allowImageExt).'|max:'.$this->allowImageSize*1024,
        ],[
            'max'           => __('general.max_file_size_err',  ['file_size'=> $this->allowImageSize.'MB']),
            'mimes'         => __('general.invalid_file_type',['file_types'=> join(',', $this->allowImageExt)]),
        ]);

        $validated_data['name']         = sanitizeTextField($this->name);
        $validated_data['description']  = sanitizeTextField($this->description, true);
        $validated_data['slug']         = $validated_data['name'];
        $validated_data['parent_id']    = $this->parentId;

        if( !is_null($this->status) && in_array( $this->status, ['active', 'deactive'])){
            $validated_data['status']   = $this->status; 
        }

        $image_dimensions = getImageDimensions('project_categories');

        if( !empty($this->image) && method_exists($this->image,'getClientOriginalName') ){
            $image_path = $this->image->store('public/project-categories');
            $image_path = str_replace('public/', '', $image_path);
            $image_name = $this->image->getClientOriginalName();
            $mime_type  = $this->image->getMimeType();
            $sizes      = generateThumbnails('project-categories', $this->image, $image_dimensions);
            
            $imageObject = array(
                'file_name' => $image_name,
                'file_path' => $image_path,
                'mime_type' => $mime_type,
                'sizes'     => $sizes,
            );

            $validated_data['image']  = serialize($imageObject);

        }elseif(!empty($this->old_image)){
            $validated_data['image'] =!empty($this->old_image) ? serialize($this->old_image) : null;
        }

        $record = ProjectCategory::updateOrCreate(['id' => $this->edit_id ], $validated_data );

        $eventData['title']     = __('general.success_title');
        $eventData['type']      = 'success';
        $eventData['message']   = $this->edit_id ? __('category.updated_msg') : __('category.added_msg');
        $this->dispatchBrowserEvent('showAlertMessage', $eventData);
        $this->emit('updatecategoryList');
        $this->resetInputfields();
        $this->editMode = false;
    }

    public function deleteCategory(){
        
        $response = isDemoSite();
        if( $response ){
            $this->dispatchBrowserEvent('showAlertMessage', [
                'type'      => 'error',
                'title'     => __('general.demosite_res_title'),
                'message'   => __('general.demosite_res_txt')
            ]);
            return;
        }
        
        $record = '';
        if($this->selectedCategories){
            $record = ProjectCategory::whereIn('id', $this->selectedCategories);
        }elseif($this->delete_id){
            $record = ProjectCategory::where('id', $this->delete_id);
        }

        $record->delete();

        if( $record ){
            $eventData['title']     = __('general.success_title');
            $eventData['type']      = 'success';
            $eventData['message']   = __('category.deleted_msg');
            $this->dispatchBrowserEvent('showAlertMessage', $eventData);
        }
        $this->resetInputfields();
    }
}
