<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['btnText' => 'Search', 'placeholder' => 'Search by keyword', 'header_position' => false]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['btnText' => 'Search', 'placeholder' => 'Search by keyword', 'header_position' => false]); ?>
<?php foreach (array_filter((['btnText' => 'Search', 'placeholder' => 'Search by keyword', 'header_position' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<form class="tk-search_category"> 
    <?php if($header_position): ?>
        <i class="fa-solid fa-grip-dots-vertical"></i>
    <?php endif; ?>
    <input type="text" <?php if($header_position): ?> class="search_keyup" <?php endif; ?> id="search_keyword<?php echo e($header_position ? "_top" : ""); ?>" placeholder="<?php echo e($placeholder); ?>">
    <div class="tk-search-menu tk-select">
        <select id="tk_category_opt<?php echo e($header_position ? "_top" : ""); ?>" data-placeholderinput="<?php echo e(__('general.search')); ?>" data-placeholder="<?php echo e(__('pages.select_list_type')); ?>" class="form-control tk_category_opt">
            
            <option value="sellers" data-icon="fa-regular fa-users"><?php echo e(__('pages.seller_opt')); ?></option>
            <?php if(projectEnabled()): ?>
                <option value="projects" data-icon="fa-regular fa-clipboard"><?php echo e(__('pages.project_opt')); ?></option>
            <?php endif; ?>
            <?php if(gigEnabled()): ?>
                <option value="gigs" data-icon="fa-regular fa-calendar"><?php echo e(__('pages.gigs_opt')); ?></option>
            <?php endif; ?>    
        </select>
    </div>
    <?php if(!$header_position): ?>
        <?php if(!empty($btnText)): ?>
            <button type="button" class="tk-search_icon searchBtn"><?php echo e($btnText); ?>

                <i class="fa-solid fa-magnifying-glass"></i>     
            </button>
        <?php else: ?>
            <button type="button" class="tk-search_icon searchBtn">
                <i class="fa-solid fa-magnifying-glass"></i>     
            </button>
        <?php endif; ?>
    <?php endif; ?>
</form>

<?php if (! $__env->hasRenderedOnce('5bf7ee62-1311-4811-acd1-f6334a01a5dd')): $__env->markAsRenderedOnce('5bf7ee62-1311-4811-acd1-f6334a01a5dd');
$__env->startPush(config('pagebuilder.site_script_var')); ?>
<script defer src="<?php echo e(asset('common/js/select2.min.js')); ?>"></script>
<script> 
    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(() => {
            $('#tk_category_opt').select2(
                { allowClear: true, minimumResultsForSearch: -1, templateSelection: formatText, templateResult: formatText}
            );
            $('#tk_category_opt_top').select2(
                { allowClear: true, minimumResultsForSearch: -1, templateSelection: formatText, templateResult: formatText}
            );
        }, 1000);
    });

    $('.searchBtn').on('click',function(){
        searchCategory();
    });
    
    $('#search_keyword_top').on('keydown', function (event) {
        if (event.which == 13) {
            event.preventDefault();
            if ($(this).hasClass('search_keyup')) {
                searchCategory(true);
            }
        }
    });
    
    $('#search_keyword').on('keydown', function (event) {
        if (event.which == 13) {
            event.preventDefault();
        }
    });

    function searchCategory(top=false) {
        var categoryType, keyword = '';
        let searchParams        = new URLSearchParams(window.location.search);
        if(!top){
            categoryType        = $('#tk_category_opt').val();
            keyword             = jQuery('#search_keyword').val();
        }else{
            categoryType        = $('#tk_category_opt_top').val();
            keyword             = jQuery('#search_keyword_top').val();
        }
        let route               = '';
        if( categoryType == 'sellers' ){
            route = "<?php echo e(route('search-sellers')); ?>";
        }else if(categoryType == 'gigs'){
            route = "<?php echo e(route('search-gigs')); ?>";
        }else{
            route = "<?php echo e(route('search-projects')); ?>";
        }

        if( route != ''){
            let URL = `${route}?&keyword=${keyword}`;
            location.href = URL;
        }
    }

    function formatText (option) {
        var icon = $(option.element).data('icon');
        return $(`<span><i class="${icon}"></i> ${option.text}</span>`);
    };
</script>
<?php $__env->stopPush(); endif; ?>

<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/components/search.blade.php ENDPATH**/ ?>