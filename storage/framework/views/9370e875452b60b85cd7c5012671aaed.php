<?php $__env->startPush(config('laraguppy.style_stack')); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/laraguppy/app.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection(config('laraguppy.content_yeild')); ?>
    <div id="chat-app" class="wpguppy-chat-app <?php if(config('laraguppy.enable_rtl') == 'no'): ?> lg-rtl <?php endif; ?>"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush(config('laraguppy.script_stack')); ?>
    <script src="<?php echo e(asset('vendor/laraguppy/jquery.min.js')); ?>"></script>
    <script>
        window.guppy_auth_token = <?php echo e(\Js::from($guppyAuthToken)); ?>;
        window.pusherConfig     = <?php echo e(\Js::from($broadcastingSettings)); ?>;
    </script>
    <script defer type="module" src="<?php echo e(asset('vendor/laraguppy/app.js')); ?>"></script> 
<?php $__env->stopPush(); ?>

<?php echo $__env->make(!empty(config('laraguppy.layout')) ? config('laraguppy.layout') : 'laraguppy::layouts.messenger', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/packages/laraguppy/resources/views/messenger.blade.php ENDPATH**/ ?>