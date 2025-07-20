<?php
    $info = getUserInfo();
?>

    <div class="tk-userlogin sub-menu-holder">
        <a href="javascript:void(0);" id="profile-avatar-menue-icon" class="tk-hasbalance">
            <i class="icon-chevron-down"></i>
            <img src="<?php echo e(asset($info['user_image'])); ?>" alt="<?php echo e($info['user_image']); ?>" />

            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'buyer|seller')): ?>
                <div class="tk-wallet tk-walletinfo">
                    <h4><?php echo e($info['user_name']); ?></h4>
                    <span ><?php echo e(__('general.active_status')); ?></span>
                </div>
                
                
              <?php endif; ?>
        </a>
        <ul class="sub-menu">
            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'buyer|seller')): ?>
                <li class="tk-switch-profile">
                    <div class="tk-expertswitch <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'buyer')): ?> tk-bgswtich <?php endif; ?>">
                        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'buyer')): ?>
                            <h2> <?php echo e(ucfirst( strtolower( __('general.switch_profile', ['user_role' => __('general.seller')])  ))); ?></h2>
                            <p><?php echo e(ucfirst( strtolower( __('general.switch_profile_desc', ['user_role' => __('general.buyer')]) ))); ?></p>
                        <?php else: ?>
                            <h2><?php echo e(ucfirst( strtolower( __('general.switch_profile', ['user_role' => __('general.buyer')]) ))); ?></h2>
                            <p><?php echo e(ucfirst( strtolower( __('general.switch_profile_desc', ['user_role' => __('general.seller')]) ))); ?></p>
                        <?php endif; ?>
                        <form method="POST" action="<?php echo e(route('switch-role')); ?>">
                            <?php echo csrf_field(); ?>
                            <a class="tk-expert-anchor" href="<?php echo e(route('switch-role')); ?>" onclick="event.preventDefault(); this.closest('form').submit();"> 
                                <?php echo e(__('general.switch_role' )); ?>

                            </a>
                        </form>
                    </div>
                </li>
                <li>
                    <a <?php if( request()->routeIs('dashboard') ): ?> class="active" <?php endif; ?> href="<?php echo e(route('dashboard')); ?>">
                        <i class="icon-layers"></i><?php echo e(__('navigation.dashboard')); ?>

                    </a>
                </li>
                <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'seller')): ?>
                    <li class="tk-account-settings">
                        <a href="<?php echo e(route('seller-profile',['slug' => $info['slug']])); ?>" target="_blank"> <i class="icon-user"></i><?php echo e(__('navigation.profile')); ?> </a>
                    </li>
                <?php endif; ?>
                <li class="tk-account-settings">
                    <a href="<?php echo e(route('settings')); ?>"> <i class="icon-settings"></i><?php echo e(__('navigation.settings')); ?> </a>
                </li>
                <?php if(packagesEnabled()): ?>
                    <li class="tk-account-settings">
                        <a href="<?php echo e(route('packages')); ?>"> <i class="icon-package"></i><?php echo e(__('navigation.packages')); ?> </a>
                    </li>
                <?php endif; ?>    
            <?php endif; ?>
            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin')): ?>
                <li class="tk-saveditems">
                    <a href="<?php echo e(route('profile')); ?>"> <i class="icon-user"></i><?php echo e(__('sidebar.profile')); ?> </a>
                </li>
                <li class="tk-saveditems">
                    <a href="<?php echo e(route('optionbuilder')); ?>"> <i class="icon-settings"></i><?php echo e(__('navigation.settings')); ?> </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/components/user-menu.blade.php ENDPATH**/ ?>