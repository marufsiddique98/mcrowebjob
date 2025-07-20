<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['page' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['page' => null]); ?>
<?php foreach (array_filter((['page' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
    $headerVariations = setting('_front.header_variation_for_pages');
    $headerVariation  = '';
    if (!empty($headerVariations)) {
        foreach ($headerVariations as $key => $variation) {
           if($variation['page_id'] == $page?->id) {
                $headerVariation = $variation['header_variation'];
                break;
           }
        }
    }
    $info=getUserInfo();
?>

<?php if(!empty($page) || Auth::guest() || $userInfo['roleName'] == 'admin'): ?>
    <!-- HEADER START -->
    <header class="tk-header tk-<?php echo e($headerVariation); ?>">
        <?php if((in_array($page?->id, setting('_front.top_bar_for_pages') ?? []) || ( empty($page) && setting('_front.top_bar_for_default_pages') == 'yes')) && !empty(setting('_front.top_bar_content'))): ?>
            <div class="tk-header-topbar">
                <p class="tk-header-topbar-text"><?php echo setting('_front.top_bar_content'); ?></p>
            </div>
        <?php endif; ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="tk-headerwrap">
                        <div class="tk-logo">
                            <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('images/logo.png')); ?>" alt="<?php echo e(__('general.logo')); ?>" /></a>
                        </div>
                        <nav class="tk-navbar navbar-expand-xl">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#tenavbar" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="icon-menu"></i>
                            </button>
                            <div id="tenavbar" class="collapse navbar-collapse">
                                <ul class="navbar-nav tk-navbarnav">
                                    <?php if( !empty($headerMenu) && $headerMenu->count() > 0 ): ?>
                                        <?php $__currentLoopData = $headerMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if (isset($component)) { $__componentOriginalce95f69c1ef890487f9ea684119db87d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce95f69c1ef890487f9ea684119db87d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu-item','data' => ['menu' => $menu]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['menu' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($menu)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce95f69c1ef890487f9ea684119db87d)): ?>
<?php $attributes = $__attributesOriginalce95f69c1ef890487f9ea684119db87d; ?>
<?php unset($__attributesOriginalce95f69c1ef890487f9ea684119db87d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce95f69c1ef890487f9ea684119db87d)): ?>
<?php $component = $__componentOriginalce95f69c1ef890487f9ea684119db87d; ?>
<?php unset($__componentOriginalce95f69c1ef890487f9ea684119db87d); ?>
<?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin')): ?>
                                        <a href="<?php echo e(route('profile')); ?>" class="tk-header-user tk-header-user-two">
                                            <img src="<?php echo e(asset($info['user_image'])); ?>" alt="<?php echo e($info['user_name']); ?>">
                                            <div class="tk-header-dash">
                                                <h6><?php echo e(__('general.dashboard')); ?></h6>
                                                <span><?php echo e($info['user_name'] ?? ''); ?></span>
                                            </div>
                                        </a>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </nav>
                        <div class="tk-header-actions-wrapper">
                            <?php if(in_array($page?->id, setting('_front.header_search_for_pages') ?? [])): ?>
                                <?php if (isset($component)) { $__componentOriginal9b33c063a2222f59546ad2a2a9a94bc6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b33c063a2222f59546ad2a2a9a94bc6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.search','data' => ['headerPosition' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['header_position' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9b33c063a2222f59546ad2a2a9a94bc6)): ?>
<?php $attributes = $__attributesOriginal9b33c063a2222f59546ad2a2a9a94bc6; ?>
<?php unset($__attributesOriginal9b33c063a2222f59546ad2a2a9a94bc6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9b33c063a2222f59546ad2a2a9a94bc6)): ?>
<?php $component = $__componentOriginal9b33c063a2222f59546ad2a2a9a94bc6; ?>
<?php unset($__componentOriginal9b33c063a2222f59546ad2a2a9a94bc6); ?>
<?php endif; ?>
                            <?php endif; ?>
                            <?php if(setting('_language.enable_language')): ?>
                                <?php if(!empty(setting('_language.languages'))): ?>
                                    <form class="tk-switch-language" action="<?php echo e(route('switch-lang')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="tk-locale">
                                        <div class="tk-select tk-language-select">
                                            <i class="fa-regular fa-globe"></i>
                                            <select id="tk-lang" class="tk_category_opt tk-select2">
                                                <?php $__currentLoopData = setting('_language.languages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($label); ?>" <?php echo e(app()->getLocale() == $label ? 'selected' : ''); ?>><?php echo e(__("pages.lang_$label")); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </form>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if(auth()->guard()->guest()): ?>
                                <div class="tk-headerwrap__right">
                                    <a href="<?php echo e(route('login')); ?>" class="tk-btn-login"><?php echo e(__( 'general.login' )); ?> </a>
                                    <a href="<?php echo e(route('register')); ?>" class="tk-btn-signin">
                                        <span><?php echo e(__( 'general.get_started' )); ?> </span>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin')): ?>
                                <a href="<?php echo e(route('profile')); ?>" class="tk-header-user tk-header-user-one">
                                    <img src="<?php echo e(asset($info['user_image'])); ?>" alt="<?php echo e($info['user_name']); ?>">
                                    <div class="tk-header-dash">
                                        <h6><?php echo e(__('general.dashboard')); ?></h6>
                                        <span><?php echo e($info['user_name'] ?? ''); ?></span>
                                    </div>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->
<?php else: ?>
    <?php if (isset($component)) { $__componentOriginal40c7a196840acc72c47806e0e9e3ffea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal40c7a196840acc72c47806e0e9e3ffea = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-menu','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard-menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal40c7a196840acc72c47806e0e9e3ffea)): ?>
<?php $attributes = $__attributesOriginal40c7a196840acc72c47806e0e9e3ffea; ?>
<?php unset($__attributesOriginal40c7a196840acc72c47806e0e9e3ffea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal40c7a196840acc72c47806e0e9e3ffea)): ?>
<?php $component = $__componentOriginal40c7a196840acc72c47806e0e9e3ffea; ?>
<?php unset($__componentOriginal40c7a196840acc72c47806e0e9e3ffea); ?>
<?php endif; ?>
<?php endif; ?>

<?php if (! $__env->hasRenderedOnce('1ec15831-9256-42f4-90c2-6126ce9233ea')): $__env->markAsRenderedOnce('1ec15831-9256-42f4-90c2-6126ce9233ea');
$__env->startPush(config('pagebuilder.site_script_var')); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        toggleMenu()
    });
</script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/components/header.blade.php ENDPATH**/ ?>