<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title><?php echo e(__('laraguppy::chatapp.app_title')); ?><?php echo e(config('app.name') ? ' - ' . config('app.name') : ''); ?></title>
        <link rel="shortcut icon" href="<?php echo e(asset('vendor/laraguppy/favicon.png')); ?>">
        <?php echo $__env->yieldPushContent(config('laraguppy.style_stack')); ?>
    </head>
    <body>
        <main>
            <div class="container">
                <?php echo $__env->yieldContent(config('laraguppy.content_yeild')); ?>
            </div>
        </main>
        <?php echo $__env->yieldPushContent(config('laraguppy.script_stack')); ?>
    </body>
</html>
<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/packages/laraguppy/resources/views/layouts/messenger.blade.php ENDPATH**/ ?>