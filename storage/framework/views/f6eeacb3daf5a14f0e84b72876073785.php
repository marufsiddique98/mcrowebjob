<?php if(!empty($page->settings['grids'])): ?>
<?php $__currentLoopData = $page->settings['grids']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $columns = getColumnInfo($grid['grid']); ?>
<!-- Section start -->
<?php
setGridId($grid['grid_id']);
$css = getCss();
if(!empty(getBgOverlay()))
$css = 'position:relative;'.$css;
?>
<section class="pb-themesection <?php echo e(getClasses()); ?>" <?php echo getCustomAttributes(); ?> <?php echo !empty($css)? 'style="' .$css.'"':''; ?>>
    <?php echo getBgOverlay(); ?>

    <div <?php echo getContainerStyles(); ?>>
        <div class="row">
            <?php if(!empty($grid['data'])): ?>
            <?php $__currentLoopData = $grid['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column => $components): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="<?php echo e($columns[$column]); ?>">
                <?php $__currentLoopData = $components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php setSectionId($component['id']);?>
                <?php if(view()->exists('pagebuilder.' . $component['section_id'] . '.view') && $loop->parent->parent->first): ?>
                    <?php echo view('pagebuilder.' . $component['section_id']. '.view')->render(); ?>

                <?php elseif(view()->exists('pagebuilder.' . $component['section_id'] . '.view')): ?>    
                    <?php echo view('pagebuilder.' . $component['section_id']. '.view')->render(); ?>

                    
                <?php else: ?>
                
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Section end -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php $__env->startPush('scripts'); ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var components = document.querySelectorAll('.component-to-load');
        components.forEach(function(component) {
            var sectionId = component.getAttribute('data-section-id');
            var componentId = component.getAttribute('data-component-id');
            lazyLoadComponent(sectionId, componentId, component);
        });
    });
    
    function lazyLoadComponent(sectionId, componentId, component) {
        let url = '<?php echo e(route("pagebuilder.html", ["section_id"=>"sId", "component_id"=> "cId"])); ?>';
        url = url.replace('sId', sectionId).replace('cId',componentId).replace('&amp;','&');
        url += '&page_id=<?php echo e($page->id); ?>';

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
            }
        });

        $.ajax({
            url: url,
            method: 'get',
            async: false,
            success: function(data){
                component.innerHTML = data;
            }
        });
    }
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/packages/larabuild/pagebuilder/resources/views/components/pb-page-components.blade.php ENDPATH**/ ?>