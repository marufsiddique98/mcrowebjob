<!DOCTYPE html>
<html lang="en">
    <head>
        <?php  
            $sitInfo        = getSiteInfo();
            $siteFavicon    = $sitInfo['site_favicon'];
            $siteDarkLogo   = $sitInfo['site_dark_logo'];
            $siteLiteLogo   = $sitInfo['site_lite_logo'];
            $currentURL     = url()->current();
            $siteLogo       = url('/') == $currentURL ? $siteDarkLogo : $siteLiteLogo;

            $header_menu    = getHeaderMenu();
        ?>
        <meta charset="utf-8">
        <?php if( !empty($siteFavicon) ): ?>
            <link rel="icon" href="<?php echo e(asset('storage/'.$siteFavicon)); ?>" type="image/x-icon">
        <?php endif; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/feather-icons.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('common/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
    </head>
    <body>
    <main>
        <section class="tk-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8 m-auto">
                        <div class="tk-errorpage">
                            <figure>
                                <img src="<?php echo $__env->yieldContent('img'); ?>" />
                            </figure>
                            <div class="tk-notfound-title">
                                <h2><?php echo $__env->yieldContent('message'); ?></h2>
                                <?php if (! empty(trim($__env->yieldContent('message_desc')))): ?>
                                    <p><?php echo $__env->yieldContent('message_desc'); ?><p>
                                <?php endif; ?>
                                <em><?php echo e(__('general.error_text_desc')); ?> <a href="<?php echo e(url('/')); ?>"><?php echo e(__('general.go_to_home_link')); ?></a></em>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php if (isset($component)) { $__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa = $attributes; } ?>
<?php $component = App\View\Components\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa)): ?>
<?php $attributes = $__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa; ?>
<?php unset($__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa)): ?>
<?php $component = $__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa; ?>
<?php unset($__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa); ?>
<?php endif; ?>
    </main>

        <script src="<?php echo e(asset('common/js/jquery.min.js')); ?>"></script>
		<script defer src="<?php echo e(asset('common/js/bootstrap.min.js')); ?>"></script>
        <script defer src="<?php echo e(asset('common/js/jquery.mCustomScrollbar.min.js')); ?>"></script>
		<script defer src="<?php echo e(asset('js/main.js')); ?>"></script>
    </body>
</html>
<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/errors/minimal.blade.php ENDPATH**/ ?>