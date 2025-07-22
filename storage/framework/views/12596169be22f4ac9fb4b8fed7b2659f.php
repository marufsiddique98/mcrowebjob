<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['OgContent'=>null,'siteName'=>null,'page'=>null,'title'=>null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['OgContent'=>null,'siteName'=>null,'page'=>null,'title'=>null]); ?>
<?php foreach (array_filter((['OgContent'=>null,'siteName'=>null,'page'=>null,'title'=>null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if( !empty($page->title) ): ?>
    <title><?php echo $page->title; ?></title>
    <meta property="og:title" content="<?php echo $page->title; ?>">
<?php elseif(!empty($title)): ?>
    <title><?php echo e($title); ?></title>
    <?php if(isset($OgContent)): ?>
        <?php $__currentLoopData = $OgContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property => $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(!empty($content)): ?>
                <meta property="<?php echo e($property); ?>" content="<?php echo e($content); ?>">
            <?php endif; ?>
            <?php if($property == 'og:description'): ?>
                <meta name="description" content="<?php echo $content; ?>">
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php else: ?>
    <title><?php echo e(__('general.dashboard')); ?> | <?php echo e($siteName); ?></title>
<?php endif; ?>

<?php if(!empty($page)): ?>
    <meta property="og:site_name" content="<?php echo e($siteName); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url"  content="<?php echo e(url()->current()); ?>">
<?php endif; ?>

<?php if( !empty($page->description) ): ?>
    <meta property="og:description" content="<?php echo $page->description; ?>">
    <meta name="description" content="<?php echo $page->description; ?>">
<?php endif; ?>


<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/components/meta-content.blade.php ENDPATH**/ ?>