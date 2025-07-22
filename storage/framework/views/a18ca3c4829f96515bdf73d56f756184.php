
<div class="tk-section tk-offering-section"> 
    <div class="tk-section_title">
        <?php if(!empty(pagesetting('sub-heading'))): ?><span><?php echo pagesetting('sub-heading'); ?></span> <?php endif; ?>
        <?php if(!empty(pagesetting('heading'))): ?><h2><?php echo pagesetting('heading'); ?></h2> <?php endif; ?>
        <?php if(!empty(pagesetting('paragraph'))): ?>
            <p><?php echo pagesetting('paragraph'); ?></p>
        <?php endif; ?>
    </div>
    <?php if (isset($component)) { $__componentOriginal5265855badec2d9d2e3266cbc070123c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5265855badec2d9d2e3266cbc070123c = $attributes; } ?>
<?php $component = App\View\Components\PopularCategories::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('popular-categories'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PopularCategories::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5265855badec2d9d2e3266cbc070123c)): ?>
<?php $attributes = $__attributesOriginal5265855badec2d9d2e3266cbc070123c; ?>
<?php unset($__attributesOriginal5265855badec2d9d2e3266cbc070123c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5265855badec2d9d2e3266cbc070123c)): ?>
<?php $component = $__componentOriginal5265855badec2d9d2e3266cbc070123c; ?>
<?php unset($__componentOriginal5265855badec2d9d2e3266cbc070123c); ?>
<?php endif; ?>
    <?php if(!empty(pagesetting('btn_text'))): ?>
        <div class="tk-button-wrapper">
            <a href="<?php echo e(route('search-projects')); ?>" target="_blank" class="tk-btn-two tk-btn-more">
                <span><?php echo pagesetting('btn_text'); ?></span>
                <i class="fa-regular fa-angle-right"></i>
            </a>
        </div>
    <?php endif; ?>  
</div>

   <?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/categories/view.blade.php ENDPATH**/ ?>