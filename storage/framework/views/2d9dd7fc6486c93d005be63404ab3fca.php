<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['categoryTextColor' => '', 'categoryBgColor' => '']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['categoryTextColor' => '', 'categoryBgColor' => '']); ?>
<?php foreach (array_filter((['categoryTextColor' => '', 'categoryBgColor' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<ul class="tk-homebanner_categories_list">
    <?php $__currentLoopData = $categories->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a class="tk-tag banner-category-bg-color" href="<?php echo e(route('search-projects', ['category' => $category->slug])); ?>">
                <span class="banner-category-text-color"><?php echo $category->name; ?></span>
            </a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
</ul>

<?php if (! $__env->hasRenderedOnce('fdb2378c-90d0-4a30-8998-2c23b3fa03b7')): $__env->markAsRenderedOnce('fdb2378c-90d0-4a30-8998-2c23b3fa03b7');
$__env->startPush(config('pagebuilder.site_style_var')); ?>
    <style>
        <?php if(!empty($categoryTextColor) && $categoryTextColor != 'rgba(0,0,0,0)'): ?>
            .banner-category-text-color{
                color: <?php echo e($categoryTextColor); ?> !important;
            }
        <?php endif; ?>

        <?php if(!empty($categoryBgColor) && $categoryBgColor != 'rgba(0,0,0,0)'): ?>
            .banner-category-bg-color{
                background-color: <?php echo e($categoryBgColor); ?> !important;
            }
        <?php endif; ?>
    </style>
<?php $__env->stopPush(); endif; ?><?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/components/banner-categories.blade.php ENDPATH**/ ?>