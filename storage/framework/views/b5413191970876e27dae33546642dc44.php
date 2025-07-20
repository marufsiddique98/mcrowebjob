<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'buyer|seller')): ?>
    <div class="tk-themesidebar">
        <div class="tk-sidetooglearea">
            <span id="#openButton" class="tk-toggler-btn">
                <i class="icon-layout" aria-hidden="true"></i>
            </span>
        </div>
        <?php if (isset($component)) { $__componentOriginal42edc48abdcb6c65aa0760095ea712dd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal42edc48abdcb6c65aa0760095ea712dd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.user-menu','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('user-menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal42edc48abdcb6c65aa0760095ea712dd)): ?>
<?php $attributes = $__attributesOriginal42edc48abdcb6c65aa0760095ea712dd; ?>
<?php unset($__attributesOriginal42edc48abdcb6c65aa0760095ea712dd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal42edc48abdcb6c65aa0760095ea712dd)): ?>
<?php $component = $__componentOriginal42edc48abdcb6c65aa0760095ea712dd; ?>
<?php unset($__componentOriginal42edc48abdcb6c65aa0760095ea712dd); ?>
<?php endif; ?>
        <nav class="tk-navbarbtm">
            <div class="tk-createbtn-wraper">
                <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'seller')): ?>
                    <?php if(gigEnabled()): ?>
                        <a href="<?php echo e(route('create-gig')); ?>" class="tk-create-button"> <span><?php echo e(__('navigation.create_gig')); ?></span>
                            <i class="icon-edit"></i>
                        </a>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if(projectEnabled()): ?>    
                        <a href="<?php echo e(route('create-project')); ?>" class="tk-create-button">
                            <span><?php echo e(__('navigation.post_project')); ?></span>
                            <i class="icon-plus"></i>
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="tk-asidenavbar_wrap">
                <ul class="tk-asidenavbar">
                    <li>
                        <a <?php if( request()->routeIs('dashboard') ): ?> class="active" <?php endif; ?> href="<?php echo e(route('dashboard')); ?>">
                            <i class="icon-layers"></i>
                            <span><?php echo e(__('navigation.dashboard')); ?></span>
                        </a>
                    </li>
                    <?php if(projectEnabled()): ?> 
                        <li <?php if( request()->routeIs('search-projects') || request()->routeIs('project-listing') ): ?> class="active" <?php endif; ?>>
                            <a href="javascript:void(0)">
                                <i class="icon-external-link"></i>
                                <span><?php echo e(__('navigation.manage_projects')); ?></span>
                                <i class="tk-arrownicon icon-chevron-down"></i>
                            </a>
                            <ul class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                    'active tk-asidedropdown' => request()->routeIs('search-projects') || request()->routeIs('project-listing'),
                                    'tk-asidedropdown'        => !request()->routeIs('search-projects') && !request()->routeIs('project-listing'),
                                ]); ?>" style="<?php echo \Illuminate\Support\Arr::toCssStyles([
                                    'display:block' => request()->routeIs('search-projects') || request()->routeIs('project-listing'),
                                ]) ?>">
                                <li >
                                    <a <?php if( request()->routeIs('search-projects') ): ?> class="active" <?php endif; ?> href="<?php echo e(route('search-projects')); ?>"><?php echo e(__('navigation.explore_all_projects')); ?></a>
                                </li>
                                <li>
                                    <a <?php if( request()->routeIs('project-listing') ): ?> class="active" <?php endif; ?> href="<?php echo e(route('project-listing')); ?>"><?php echo e(__('navigation.my_project')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if(gigEnabled()): ?>
                        <li <?php if( request()->routeIs('gig-list') || request()->routeIs('gig-orders') || request()->routeIs('search-gigs')  ): ?> class="active" <?php endif; ?>>
                            <a href="javascript:void(0)">
                                <i class="icon-file-text"></i>
                                <span><?php echo e(__('navigation.manage_gigs')); ?></span>
                                <i class="tk-arrownicon icon-chevron-down"></i>
                            </a>
                            <ul class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                    'active tk-asidedropdown' => request()->routeIs('gig-list') || request()->routeIs('gig-orders') || request()->routeIs('search-gigs'),
                                    'tk-asidedropdown'        => !request()->routeIs('gig-list') && !request()->routeIs('gig-orders') && !request()->routeIs('search-gigs'),
                                ]); ?>" style="<?php echo \Illuminate\Support\Arr::toCssStyles([
                                    'display:block' => request()->routeIs('gig-list') || request()->routeIs('gig-orders') || request()->routeIs('search-gigs'),
                                ]) ?>">

                                <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'seller')): ?>
                                    <li>
                                        <a <?php if( request()->routeIs('gig-list') ): ?> class="active" <?php endif; ?> href="<?php echo e(route('gig-list')); ?>">
                                            <!-- <i class="icon-file-text"></i> -->
                                            <span><?php echo e(__('navigation.my_gigs')); ?></span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <li>
                                    <a <?php if( request()->routeIs('gig-orders') ): ?> class="active" <?php endif; ?> href="<?php echo e(route('gig-orders')); ?>">
                                        <!-- <i class="icon-check-square"></i> -->
                                        <span>
                                            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'seller')): ?>
                                                <?php echo e(__('navigation.my_orders')); ?>

                                            <?php else: ?>
                                                <?php echo e(__('navigation.gig_orders')); ?>

                                            <?php endif; ?>
                                        </span>
                                    </a>
                                </li>
                                <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'buyer')): ?>
                                    <li>
                                        <a <?php if( request()->routeIs('search-gigs') ): ?> class="active" <?php endif; ?> href="<?php echo e(route('search-gigs')); ?>">
                                            <!-- <i class="icon-file-text"></i> -->
                                            <span><?php echo e(__('navigation.search_gigs')); ?></span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    <?php endif; ?>    
                    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'buyer')): ?>
                        <li>
                            <a <?php if( request()->routeIs('search-sellers') ): ?> class="active" <?php endif; ?> href="<?php echo e(route('search-sellers')); ?>">
                                <i class="icon-user"></i>
                                <span><?php echo e(__('navigation.search_seller')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <li>
                        <a <?php if( request()->routeIs('dispute-list') ): ?> class="active" <?php endif; ?> href="<?php echo e(route('dispute-list')); ?>">
                            <i class="icon-alert-triangle"></i>
                            <span><?php echo e(__('navigation.disputes')); ?></span>
                        </a>
                    </li>

                    <li>
                        <a <?php if( request()->routeIs('invoices') ): ?> class="active" <?php endif; ?> href="<?php echo e(route('invoices')); ?>">
                            <i class="icon-shopping-bag"></i>
                            <span><?php echo e(__('navigation.invoices')); ?></span>
                        </a>
                    </li>

                    <li>
                        <a <?php if( request()->routeIs('favourite-items') ): ?> class="active" <?php endif; ?> href="<?php echo e(route('favourite-items')); ?>">
                            <i class="icon-heart"></i>
                            <span><?php echo e(__('navigation.saved_items')); ?></span>
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="tk-usermenu">
                <li>
                    <a <?php if( request()->is('messenger') ): ?> class="active" <?php endif; ?> href="<?php echo e(url('/messenger')); ?>"><i class="icon-message-square"></i><span><?php echo e(__('general.message_heading')); ?></span></a>
                </li>

                <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'buyer|seller')): ?>
                    <li class="tk-usermenu_account">
                        <a href="javascript:void(0)">
                            <i class="icon-credit-card"></i> <span><?php echo e(__('general.account_balance')); ?> <strong><?php echo e(getUserWalletAmount()); ?></strong></span>
                        </a>
                    </li>
                <?php endif; ?>

                <li class="tk-logout">
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); this.closest('form').submit();"><i class="icon-power"></i><span><?php echo e(__('auth.logout')); ?></span> </a>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
<?php endif; ?>
<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/components/dashboard-menu.blade.php ENDPATH**/ ?>