<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <?php
            $sitInfo        = getSiteInfo();
            $siteFavicon    = $sitInfo['site_favicon'];
            $siteTitle      = $sitInfo['site_name'];
            $siteDarkLogo   = $sitInfo['site_dark_logo'];
            $siteLiteLogo   = $sitInfo['site_lite_logo'];

            $adsense_client_id  = setting('_adsense.adsense_client_id');
            $rtl                = setting('_site.rtl');
            $rtl_class          = !empty($rtl) && $rtl == 1 ? 'tk-rtl' : '';
            $currentURL         = url()->current();
            $siteLogo           = url('/') == $currentURL ? $siteDarkLogo : $siteLiteLogo;
        ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <?php if (isset($component)) { $__componentOriginalfad345ba8e9885f75fe8edddaef3cd8c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfad345ba8e9885f75fe8edddaef3cd8c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.meta-content','data' => ['ogContent' => $OgContent ?? null,'siteName' => $siteTitle ?? null,'page' => $page ?? null,'title' => $title ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('meta-content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['OgContent' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($OgContent ?? null),'siteName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($siteTitle ?? null),'page' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($page ?? null),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title ?? null)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfad345ba8e9885f75fe8edddaef3cd8c)): ?>
<?php $attributes = $__attributesOriginalfad345ba8e9885f75fe8edddaef3cd8c; ?>
<?php unset($__attributesOriginalfad345ba8e9885f75fe8edddaef3cd8c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfad345ba8e9885f75fe8edddaef3cd8c)): ?>
<?php $component = $__componentOriginalfad345ba8e9885f75fe8edddaef3cd8c; ?>
<?php unset($__componentOriginalfad345ba8e9885f75fe8edddaef3cd8c); ?>
<?php endif; ?>

        <link rel="icon" href="<?php echo e(asset('images/site-favicon.png')); ?>" type="image/x-icon">
        <script defer src="<?php echo e(asset('js/main.js')); ?>"></script>
        <?php echo app('Illuminate\Foundation\Vite')([
            'public/common/css/bootstrap.min.css',
            'public/css/feather-icons.css',
            'public/css/fontawesome/all.min.css',
            'public/css/fontawesome/font-awesome-six.css',
            'public/common/css/select2.min.css',
            'public/common/css/jquery.mCustomScrollbar.min.css',
            'public/common/css/jquery-confirm.min.css',
            'public/css/swiper.min.css',
        ]); ?>
        <?php if(empty($page)): ?>
            <?php echo \Livewire\Livewire::styles(); ?>

        <?php endif; ?>
        <?php echo $__env->yieldPushContent(config('pagebuilder.site_style_var')); ?>
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/main.css')); ?>">
            <?php if(!empty(getThemeVariation($page ?? null))): ?>
                <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/'.getThemeVariation($page ?? null))); ?>">
            <?php endif; ?>
        <?php if( !empty($rtl_class) ): ?>
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/rtl.css')); ?>">
        <?php endif; ?>

        <?php if( ( !empty($include_menu) || !empty($site_view) ) && !empty($adsense_client_id) ): ?>
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=<?php echo e($adsense_client_id); ?>" crossorigin="anonymous"></script>
            <script>
                (adsbygoogle=window.adsbygoogle||[]).pauseAdRequests=1;
                (adsbygoogle=window.adsbygoogle||[]).push({google_ad_client: "<?php echo e($adsense_client_id); ?>", enable_page_level_ads: true});
            </script>
        <?php endif; ?>
    </head>
    <body class="tk-homepage wr-overxhidden <?php echo e($rtl_class); ?>">

        <main class="min-h-screen tk-main-wrapper">
            <?php if (isset($component)) { $__componentOriginal2a2e454b2e62574a80c8110e5f128b60 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2a2e454b2e62574a80c8110e5f128b60 = $attributes; } ?>
<?php $component = App\View\Components\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['page' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($page ?? null)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2a2e454b2e62574a80c8110e5f128b60)): ?>
<?php $attributes = $__attributesOriginal2a2e454b2e62574a80c8110e5f128b60; ?>
<?php unset($__attributesOriginal2a2e454b2e62574a80c8110e5f128b60); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2a2e454b2e62574a80c8110e5f128b60)): ?>
<?php $component = $__componentOriginal2a2e454b2e62574a80c8110e5f128b60; ?>
<?php unset($__componentOriginal2a2e454b2e62574a80c8110e5f128b60); ?>
<?php endif; ?>
            <?php echo $__env->yieldContent(config('pagebuilder.site_section')); ?>

            <?php if(Auth::guest() || !empty($page)): ?>
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
            <?php endif; ?>
        </main>

        <?php echo app('Illuminate\Foundation\Vite')([
            'public/common/js/jquery-confirm.min.js',
        ]); ?>

        <script src="<?php echo e(asset('common/js/jquery.min.js')); ?>"></script>
        <?php echo $__env->yieldPushContent(config('pagebuilder.site_script_var')); ?>
        <?php echo $__env->make('layouts.footer_scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php if(empty($page)): ?>
            <?php echo \Livewire\Livewire::scripts(); ?>

        <?php endif; ?>
    </body>
</html>
<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/layouts/app.blade.php ENDPATH**/ ?>