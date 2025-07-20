<?php $__env->startSection('content'); ?>
   <!-- MAIN START -->
   <main class="at-main"> 
       <button class="at-openmenu-btn"><i class="icon-menu"></i></button>
     <div class="at-pagebuilder-holder at-openmenu" >
       <aside class="at-asidenav">
           <div class="at-asidenav_list">
               <ul class="at-pagebuilder-tab nav " id="pills-tab">
                 <li>
                   <button class="at-nav-tabs active" data-bs-toggle="tab" data-bs-target="#blocks-tab" aria-selected="true"><i class="icon-grid"></i></button>
                 </li>
                 <li>
                   <button class="at-nav-tabs" data-bs-toggle="tab" id="block-settings-tab" data-bs-target="#block-settings" aria-selected="false"><i class="icon-settings"></i></button>
                 </li>
                 <li>
                   <button class="at-nav-tabs" data-bs-toggle="tab" id="block-style-tab" data-bs-target="#style-setting" aria-selected="false"><i class="icon-edit"></i></button>
                 </li>
               </ul>
           </div>
           <div id="at-sidebar-contents" class="at-sidebar-content mCustomScrollbar">  
               <div class="tab-content">
                   <div class="tab-pane fade show active" id="blocks-tab">
                       <div class="at-pagebuilder-navs">
                           <div class="at-pagebuilder-title">
                               <div class="at-inputicon">
                                   <input type="text" class="form-control search-element" placeholder="<?php echo e(__('pages.search_elements')); ?>">
                                   <i class="icon-search"></i>
                               </div>
                           </div>
                           <?php if( !empty($page_blocks) ): ?>
                           <div class="at-template-sections">
                               <div class="at-components-holder" data-bs-toggle="collapse" data-bs-target="#general-blocks" aria-expanded="true">
                                   <strong><?php echo e(__('pages.general')); ?></strong> 
                               </div>
                               <div id="general-blocks" class="collapse show">
                                   <div class="at-components-content">
                                       <ul class="at-component-list">
                                           <?php $__currentLoopData = $page_blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                               <li draggable="true" ondragstart="dragStart(event)" id="<?php echo e($key); ?>">
                                                   <div class="at-widget-component">
                                                       <img src="<?php echo e(asset('pagebuilder/images/grip.png')); ?>" alt="">
                                                       <strong><?php echo e($single); ?></strong>
                                                   </div>
                                               </li>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                           <?php endif; ?>
                       </div>
                   </div>
                   <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('page-builder.block-setting', ['pageId' => $page_id,'pageBlocks' => $page_blocks,'page_id' => $page_id,'page_blocks' => $page_blocks])->html();
} elseif ($_instance->childHasBeenRendered('xnNEyjx')) {
    $componentId = $_instance->getRenderedChildComponentId('xnNEyjx');
    $componentTag = $_instance->getRenderedChildComponentTagName('xnNEyjx');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xnNEyjx');
} else {
    $response = \Livewire\Livewire::mount('page-builder.block-setting', ['pageId' => $page_id,'pageBlocks' => $page_blocks,'page_id' => $page_id,'page_blocks' => $page_blocks]);
    $html = $response->html();
    $_instance->logRenderedChild('xnNEyjx', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                   <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('page-builder.block-style-setting', ['pageId' => $page_id,'pageBlocks' => $page_blocks,'page_id' => $page_id,'page_blocks' => $page_blocks])->html();
} elseif ($_instance->childHasBeenRendered('GiQsq4Q')) {
    $componentId = $_instance->getRenderedChildComponentId('GiQsq4Q');
    $componentTag = $_instance->getRenderedChildComponentTagName('GiQsq4Q');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('GiQsq4Q');
} else {
    $response = \Livewire\Livewire::mount('page-builder.block-style-setting', ['pageId' => $page_id,'pageBlocks' => $page_blocks,'page_id' => $page_id,'page_blocks' => $page_blocks]);
    $html = $response->html();
    $_instance->logRenderedChild('GiQsq4Q', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
               </div>
           </div>
           <div class="at-asidenav_btn">
                <ul class="at-btns-holder">
                    <li>
                        <a href="<?php echo e(route('SitePages')); ?>" class="at-back-btn"><i class="icon-corner-down-left"></i> <?php echo e(__('pages.back')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(url($page_url)); ?>" target="_blank" ><i class="icon-monitor"></i> <?php echo e(__('pages.view')); ?></a>
                    </li>
                </ul>
                <?php if($page_status == 'draft'): ?>
                    <a href="javascript:;"  class="at-btn publish-page"><?php echo e(__('pages.publish')); ?></a>
                <?php endif; ?>
           </div>
       </aside>
       <div class="at-pagebuilder-right">
         <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('page-builder.page-render', ['pageId' => $page_id,'pageBlocks' => $page_blocks,'page_id' => $page_id,'page_blocks' => $page_blocks])->html();
} elseif ($_instance->childHasBeenRendered('d0rxOGF')) {
    $componentId = $_instance->getRenderedChildComponentId('d0rxOGF');
    $componentTag = $_instance->getRenderedChildComponentTagName('d0rxOGF');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('d0rxOGF');
} else {
    $response = \Livewire\Livewire::mount('page-builder.page-render', ['pageId' => $page_id,'pageBlocks' => $page_blocks,'page_id' => $page_id,'page_blocks' => $page_blocks]);
    $html = $response->html();
    $_instance->logRenderedChild('d0rxOGF', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
       </div>
     </div>
   </main>
   <!-- MAIN END -->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        setTimeout(function() {
            $('.search-element').on('keyup',function() {
                let _this   = $(this);
                let searchVal = _this.val().toUpperCase();
                let data = _this.parents('.at-pagebuilder-title').next('.at-template-sections').find('li .at-widget-component strong');
                let i;
                for (i = 0; i < data.length; i++) {
                    txtValue = data[i].textContent || data[i].innerText;
                    if (txtValue.toUpperCase().indexOf(searchVal) > -1) {
                        data[i].parentElement.parentElement.style.display = "";
                    }else{
                        data[i].parentElement.parentElement.style.display = "none";
                    }
                }
            });

            $(document).on('click','.at-openmenu-btn', function(e){
                let _this = $(this);
                _this.siblings('.at-pagebuilder-holder').toggleClass('at-openmenu');
            });
        }, 500);
    </script>   
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin.pagebuilder-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/admin/pagebuilder.blade.php ENDPATH**/ ?>