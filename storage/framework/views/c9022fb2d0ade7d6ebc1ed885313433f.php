<?php 
    use Carbon\Carbon;

    $sellerPackages = $packages->filter(function ($package) {
        return $package['role_id'] == 2;
    })->values()->all();

    $buyerPackages = $packages->filter(function ($package) {
        return $package['role_id'] == 3;
    })->values()->all();
?>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="saller" role="tabpanel" aria-labelledby="saller-tab">
        <ul class="tk-busines-tabs">
            <?php $__currentLoopData = $sellerPackages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sellerPackage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $subsc_packages     = array_key_exists($sellerPackage->id, $subscribe_packages) ? $subscribe_packages[$sellerPackage->id] : [];
                    $rem_quota          = [];
                    $pkg_status         = '';
                    $remaining_duration = '';
                    $pkg_type           = '';

                        if( !empty($subsc_packages) && $subsc_packages->status == 'active'){
                            $subsc_options      = @unserialize($subsc_packages->package_options);
                            $rem_quota          = !empty($subsc_options['rem_quota']) ? $subsc_options['rem_quota'] : [];
                            $pkg_status         = $subsc_packages->status;
                            $expiry_date        = Carbon::parse($subsc_packages->package_expiry);
                            $pkg_type           = $subsc_options['type'];
                            if( $expiry_date->gte(Carbon::now()) ){
                                if( $pkg_type == 'day'){
                                    $remaining_duration = Carbon::now()->floatDiffInDays($expiry_date);
                                    $remaining_duration = intval( $remaining_duration );
                                } elseif( $pkg_type == 'month'){
                                    $remaining_duration = Carbon::now()->floatDiffInMonths($expiry_date);
                                    $remaining_duration = intval( $remaining_duration );
                                } elseif( $pkg_type == 'year'){
                                    $remaining_duration = Carbon::now()->floatDiffInYears($expiry_date);
                                    $remaining_duration = intval( $remaining_duration );
                                }
                            }
                        } elseif( !empty($subsc_packages) && $subsc_packages->status == 'expired'){
                            $pkg_status = $subsc_packages->status;
                        }
                    elseif( !empty($subsc_packages) && $subsc_packages->status == 'expired'){
                        $pkg_status = $subsc_packages->status;
                    }
                    $options          = unserialize($sellerPackage->options);
                    // dd($options['project_featured_days']);
                    $duration         = $options['duration'] > 1 ? $options['duration'] .' '. $options['type'].'s' : $options['duration'] .' '. $options['type'];
                    
                ?>
                <li class="tk-packageitem <?php echo ($loop->index == 1 ? 'tk-packagepopular' : null) ?>" >
                    <?php if($loop->index == 1): ?>
                        <span>Most Popular</span>
                    <?php endif; ?>
                    <div class="tk-packageitem_starter">
                        <span><?php echo e($sellerPackage->title); ?></span>
                        <figure>
                            <?php 
                                $package_image      = 'images/default-img-286x186.png';
                                if(!empty($sellerPackage->image)){
                                    $files  = unserialize($sellerPackage->image);
                                    $images = $files['file_path'];
                                    if( !empty($images)){
                                        $package_image = 'storage/'.$images;
                                    }
                                }
                            ?>
                            <img src="<?php echo e(asset($package_image)); ?>"  alt="image">
                        </figure>
                    </div>
                    <div class="tk-packageitem_price">
                        <h3><?php echo e($currency_symbol); ?><?php echo e(number_format( $sellerPackage->price, 2)); ?> <?php echo e(__('general.'.$options['type'])); ?></h3> 
                        <span><?php echo e(__('general.include_all_tax')); ?></span>
                    </div>
                    <div class="tk-whatinclude">
                        <h4><?php echo e(__('general.it_includes')); ?></h4>
                        <ul class="tk-packageitem_package">
                            <?php if( !empty($options) && isset($options['posted_projects']) ): ?>
                                <li>
                                    <div class="tk-packageinfo">
                                        <i class="fas fa-check"></i>
                                        <span>
                                            <?php if( !empty($rem_quota) && isset($rem_quota['posted_projects']) ): ?>
                                                <em><?php echo e($rem_quota['posted_projects']); ?> / </em>
                                            <?php endif; ?>
                                            <?php echo e($options['posted_projects']); ?> <?php echo e(__('general.no_of_projects')); ?>

                                        </span>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if( !empty($options) && isset($options['featured_projects']) ): ?>
                                <li>
                                    <div class="tk-packageinfo">
                                        <i class="fas fa-check"></i>
                                        <span>
                                            <?php if( !empty($rem_quota) && isset($rem_quota['featured_projects']) ): ?>
                                                <em><?php echo e($rem_quota['featured_projects']); ?> / </em>
                                            <?php endif; ?>
                                            <?php echo e($options['featured_projects']); ?> <?php echo e(__('general.feature_projects')); ?>

                                        </span>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if( !empty($options) && isset($options['credits']) ): ?>
                                <li>
                                    <div class="tk-packageinfo">
                                        <i class="tk-icon-cross fas fa-check"></i>
                                        <span>
                                            <?php if( !empty($rem_quota) && isset($rem_quota['credits']) ): ?>
                                                <em><?php echo e($rem_quota['credits']); ?> / </em>
                                            <?php endif; ?>
                                            <?php echo e($options['credits']); ?> <?php echo e(__('general.credit_for_project')); ?>

                                        </span>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <li>
                                <div class="tk-packageinfo">
                                    <i class="fas fa-check"></i>
                                    <span>
                                        <?php echo e($options['profile_featured_days'] ?? $sellerPackage->id); ?> <?php echo e(__('general.profile_feature_duration')); ?> 
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="tk-packageinfo">
                                    <i class="fas fa-check"></i>
                                    <span>
                                        <?php echo e($options['project_featured_days'] ?? $sellerPackage->id); ?> <?php echo e(__('general.feature_project_duration')); ?> 
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="<?php echo e(Auth::check() ? route('packages') : route('login')); ?>" class="tk-btn-card <?php echo ($loop->index == 1 ? 'active' : null) ?>">
                        <span><?php echo e(__('general.buy_now')); ?></span>
                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </ul>
    </div>
    <div class="tab-pane fade" id="buyer" role="tabpanel" aria-labelledby="buyer-tab">
        <ul class="tk-busines-tabs">
            <?php $__currentLoopData = $buyerPackages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buyerPackage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $subsc_packages     = array_key_exists($buyerPackage->id, $subscribe_packages) ? $subscribe_packages[$buyerPackage->id] : [];
                    $rem_quota          = [];
                    $pkg_status         = '';
                    $remaining_duration = '';
                    $pkg_type           = '';

                    if( !empty($subsc_packages) && $subsc_packages->status == 'active'){
                        $subsc_options      = @unserialize($subsc_packages->package_options);
                        $rem_quota          = !empty($subsc_options['rem_quota']) ? $subsc_options['rem_quota'] : [];
                        $pkg_status         = $subsc_packages->status;
                        $expiry_date        = Carbon::parse($subsc_packages->package_expiry);
                        $pkg_type           = $subsc_options['type'];
                        if( $expiry_date->gte(Carbon::now()) ){
                            if( $pkg_type == 'day'){
                                $remaining_duration = Carbon::now()->floatDiffInDays($expiry_date);
                                $remaining_duration = intval( $remaining_duration );
                            } elseif( $pkg_type == 'month'){
                                $remaining_duration = Carbon::now()->floatDiffInMonths($expiry_date);
                                $remaining_duration = intval( $remaining_duration );
                            } elseif( $pkg_type == 'year'){
                                $remaining_duration = Carbon::now()->floatDiffInYears($expiry_date);
                                $remaining_duration = intval( $remaining_duration );
                            }
                        }
                    } elseif( !empty($subsc_packages) && $subsc_packages->status == 'expired'){
                        $pkg_status = $subsc_packages->status;
                    }
                    $options          = unserialize($buyerPackage->options);
                    // dd($options['project_featured_days']);
                    $duration         = $options['duration'] > 1 ? $options['duration'] .' '. $options['type'].'s' : $options['duration'] .' '. $options['type'];
                    
                ?>
                <li class="tk-packageitem <?php echo ($loop->index == 1 ? 'tk-packagepopular' : null) ?>">
                    <?php if($loop->index == 1): ?>
                        <span><?php echo e(__('general.most_popular')); ?></span>
                    <?php endif; ?>
                    <div class="tk-packageitem_starter">
                        <span><?php echo e($buyerPackage->title); ?></span>
                        <figure class="tk-online-img">
                            <?php 
                                $package_image      = 'images/default-img-286x186.png';
                                if(!empty($buyerPackage->image)){
                                    $files  = unserialize($buyerPackage->image);
                                    $images = $files['file_path'];
                                    if( !empty($images)){
                                        $package_image = 'storage/'.$images;
                                    }
                                }
                            ?>
                            <img src="<?php echo e(asset($package_image)); ?>"  alt="image">
                        </figure>
                    </div>
                    <div class="tk-packageitem_price">
                        <h3><?php echo e($currency_symbol); ?><?php echo e(number_format( $buyerPackage->price, 2)); ?> <?php echo e(__('general.'.$options['type'])); ?></h3> 
                        <span><?php echo e(__('general.include_all_tax')); ?></span>
                    </div>
                    <div class="tk-whatinclude">
                        <h4><?php echo e(__('general.it_includes')); ?></h4>
                        <ul class="tk-packageitem_package">
                            
                            <?php if( !empty($options) && isset($options['posted_projects']) ): ?>
                                <li>
                                    <div class="tk-packageinfo">
                                        <i class="fas fa-check"></i>
                                        <span>
                                            <?php if( !empty($rem_quota) && isset($rem_quota['posted_projects']) ): ?>
                                                <em><?php echo e($rem_quota['posted_projects']); ?> / </em>
                                            <?php endif; ?>
                                            <?php echo e($options['posted_projects']); ?> <?php echo e(__('general.no_of_projects')); ?>

                                        </span>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if( !empty($options) && isset($options['featured_projects']) ): ?>
                                <li>
                                    <div class="tk-packageinfo">
                                        <i class="fas fa-check"></i>
                                        <span>
                                            <?php if( !empty($rem_quota) && isset($rem_quota['featured_projects']) ): ?>
                                                <em><?php echo e($rem_quota['featured_projects']); ?> / </em>
                                            <?php endif; ?>
                                            <?php echo e($options['featured_projects']); ?> <?php echo e(__('general.feature_projects')); ?>

                                        </span>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if( !empty($options) && isset($options['credits']) ): ?>
                                <li>
                                    <div class="tk-packageinfo">
                                        <i class="fas fa-check"></i>
                                        <span>
                                            <?php if( !empty($rem_quota) && isset($rem_quota['credits']) ): ?>
                                                <em><?php echo e($rem_quota['credits']); ?> / </em>
                                            <?php endif; ?>
                                            <?php echo e($options['credits']); ?> <?php echo e(__('general.credit_for_project')); ?>

                                        </span>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <li>
                                <div class="tk-packageinfo">
                                    <i class="fas fa-check"></i>
                                    <span>
                                        <?php echo e($options['profile_featured_days'] ?? $buyerPackage->id); ?> <?php echo e(__('general.profile_feature_duration')); ?> 
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="tk-packageinfo">
                                    <i class="fas fa-check"></i>
                                    <span>
                                        <?php echo e($options['project_featured_days'] ?? $buyerPackage->id); ?> <?php echo e(__('general.feature_project_duration')); ?> 
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="<?php echo e(Auth::check() ? route('packages') : route('login')); ?>" class="tk-btn-card <?php echo ($loop->index == 1 ? 'active' : null) ?>">
                        <span><?php echo e(__('general.buy_now')); ?></span>
                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div><?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/components/packages.blade.php ENDPATH**/ ?>