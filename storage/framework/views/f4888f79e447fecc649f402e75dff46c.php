<ul class="tk-talent-section-users">
    <?php $__currentLoopData = $profile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <div class="tk-talent">
                <div class="tk-talent-content">
                    <?php if(!empty($single->image)): ?>
                        <figure>
                            <?php
                                if( !empty($single->image) ){
                                    $image_path      = getProfileImageURL( $single->image, '380x240' );
                                    $seller_image    = !empty($image_path) ? '/storage/' . $image_path : '/images/default-user-380x240.png';
                                }else{
                                    $seller_image = '/images/default-user-380x240.png';
                                }
                            ?>
                            <img src="<?php echo e(asset($seller_image)); ?>" alt="img">
                        </figure>
                    <?php endif; ?>
                    <div class="tk-talent_wrppaer">
                        <div class="tk-talent-profile-detail">
                            <div class="tk-talent-title">
                                <?php if(!empty($single->full_name)): ?>
                                    <h3>
                                        <a href="<?php echo e(route('seller-profile', ['slug' => $single->slug])); ?>">
                                            <?php echo e($single->full_name); ?>

                                            <?php if (isset($component)) { $__componentOriginald56140b9ab71a574fd5682ffe46cb241 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald56140b9ab71a574fd5682ffe46cb241 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.verified-tippy','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('verified-tippy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald56140b9ab71a574fd5682ffe46cb241)): ?>
<?php $attributes = $__attributesOriginald56140b9ab71a574fd5682ffe46cb241; ?>
<?php unset($__attributesOriginald56140b9ab71a574fd5682ffe46cb241); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald56140b9ab71a574fd5682ffe46cb241)): ?>
<?php $component = $__componentOriginald56140b9ab71a574fd5682ffe46cb241; ?>
<?php unset($__componentOriginald56140b9ab71a574fd5682ffe46cb241); ?>
<?php endif; ?>
                                        </a>
                                    </h3>
                                <?php endif; ?>
                                <?php if(!empty($single->profile_visits_count)): ?>
                                    <span>
                                        <i class="icon-eye"></i>
                                        <?php echo e($single->profile_visits_count == 1 ? __('general.single_view') : __('general.user_views', ['count' => number_format($single->profile_visits_count) ] )); ?>

                                    </span>
                                <?php elseif(empty($single->profile_visits_count)): ?>
                                    <span>
                                        <?php echo e(__('general.zero_view')); ?>

                                    </span>
                                <?php endif; ?>
                                <?php if($single->is_featured): ?>
                                    <span>
                                        <i class="fa-solid fa-bolt"></i>
                                        <?php echo e(__('general.pro')); ?>

                                    </span>
                                <?php endif; ?>
                            </div>
                            <?php if(!empty($single->tagline)): ?>
                                    <h3><?php echo e($single->tagline); ?></h3>
                                <?php endif; ?>
                            <div class="tk-rating-star">
                                <i class="fa-solid fa-star"></i>
                                <span><?php echo e(ratingFormat( $single->ratings_avg_rating )); ?> ( <?php echo e($single->ratings_count == 1 ? __('general.user_review') : __('general.user_reviews', ['count' => number_format($single->ratings_count) ])); ?> )</span>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="tk-talent-rate">
                    <li>
                        <span>
                            <i class="icon-credit-card"></i>
                            <?php echo e(__('general.starting_from')); ?>

                        </span>
                        <strong><?php echo e(__('general.per_hour_rate', ['rate' => number_format($single->user->userAccountSetting->hourly_rate, 2), 'currency_symbol' => $currency_symbol])); ?></strong>
                    </li>
                    <li>
                        <span>
                            <i class="icon-map-pin"></i>
                            <?php echo e(__('general.location')); ?>

                        </span>
                        <strong><?php echo getUserAddress($single->address, 'city_state_country'); ?></strong>
                    </li>
                </ul>

                <?php if(!empty($single->skills)): ?>
                    <div class="tk-talent-tags" id="skills-<?php echo e($single->id); ?>">
                        <ul>
                            <?php
                                $skills = $single->skills;
                                $remainingSkillsCount = $skills->count() - 5;
                            ?>

                            <?php $__currentLoopData = $skills->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <span><?php echo e($skill->name); ?></span>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php if($remainingSkillsCount > 0): ?>
                                <li class="more-skills">
                                    <a href="javascript:void(0)"  
                                    data-toggle="tooltip" 
                                    title="<?php echo e(implode(', ', $skills->slice(5)->pluck('name')->toArray())); ?>">
                                    <?php echo e(__('general.more_skills',['count'=> $remainingSkillsCount])); ?>

                                </li>
                            <?php endif; ?>
                            <?php $__currentLoopData = $skills->slice(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="hidden-skill-<?php echo e($single->id); ?>" style="display: none;">
                                    <span><?php echo e($skill->name); ?></span>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <div class="tk-talent-btns">
                    <a href="<?php echo e(route('seller-profile', ['slug'=> $single->slug] )); ?>" target="_blank" class="tk-btn-card"><span><?php echo e(__('general.profile')); ?></span></a>
                    
                    <?php if(auth()->guard()->guest()): ?>
                        <button onclick="redirectToLogin()" class="tk-favicon"><i class="fa-regular fa-heart"></i></button>
                    <?php endif; ?>
                    
                </div>
            </div>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php if (! $__env->hasRenderedOnce('6bbf26b6-938d-4e6d-9a5d-cb73e042acfe')): $__env->markAsRenderedOnce('6bbf26b6-938d-4e6d-9a5d-cb73e042acfe');
$__env->startPush(config('pagebuilder.site_script_var')); ?>
    <script src="<?php echo e(asset('common/js/popper-core.js')); ?>"></script> 
    <script src="<?php echo e(asset('common/js/tippy.js')); ?>"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let tb_tippy = document.querySelectorAll(".tk-hastippy");
            tb_tippy.forEach(function(element) {
                tippy(element, {
                    content: element.querySelector('.tk-tippycontent').innerHTML,
                    animation: "scale",
                });
            });
        });
    </script>
<?php $__env->stopPush(); endif; ?>


<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/components/sellers.blade.php ENDPATH**/ ?>