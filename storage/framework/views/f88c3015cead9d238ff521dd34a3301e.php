<ul class="tk-employment">
    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <div class="tk-employe-info">
                <div class="tk-employe-content">
                    <div class="tk-employe-title">
                        <div class="tk-employe-work">
                            <span>
                                <?php echo e(__('project.project_posted_date',['diff_time'=> getTimeDiff($project->updated_at)])); ?>

                            </span>
                            <h3>
                                <a href="<?php echo e(route('project-detail', ['slug'=> $project->slug] )); ?>"><?php echo e($project->project_title); ?></a>
                            </h3>
                        </div>
                        <?php if(auth()->guard()->guest()): ?>
                            <a href="/login" class="tk-favicon"><i class="fa-regular fa-heart"></i></a>
                        <?php endif; ?>
                        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'seller')): ?>
                            <?php
                                $isFavorite = in_array($project->id, $fav_projects);
                            ?>
                            <a href="javascript:;" data-project-id="<?php echo e($project->id); ?>" class="favorite-project tk-favicon<?php echo e($isFavorite ? ' active' : ''); ?> "><i class="fa-regular fa-heart"></i></a>
                        <?php endif; ?>  
                    </div>
                    <div class="tk-employe-price">
                        <span><?php echo e($project->project_type == 'fixed' ?  __('project.fixed_project') : __('project.hourly_project')); ?></span>
                        <strong><?php echo e(getProjectPriceFormat($project->project_type, $currency_symbol, $project->project_min_price, $project->project_max_price)); ?></strong>
                    </div>
                    <p class="tk-employe-framework"><?php echo e(implode(' ', array_slice(str_word_count(strip_tags($project->project_description), 1), 0, 28))); ?>. . .</p>
                    <ul class="tk-employe-tag">
                        <li>
                            <span class="tk-purple-tag"><i class="icon-map-pin"></i> <?php echo e(!empty($project->projectLocation) ? $project->projectLocation->name : ''); ?></span>
                        </li>
                        <li>
                            <span class="tk-red-tag"><i class="icon-briefcase"></i><?php echo e(!empty($project->expertiseLevel) ? $project->expertiseLevel->name : ''); ?></span>
                        </li>
                        <li>
                            <span class="tk-green-tag">
                                <i class="<?php echo e($project->project_hiring_seller > 1 ? 'icon-users' : 'icon-user'); ?>"></i>
                                <?php echo e($project->project_hiring_seller .' '. ($project->project_hiring_seller > 1 ? __('project.freelancers') : __('project.freelancer'))); ?>

                            </span>
                        </li>
                    </ul>
                
                    <?php if(!empty($project->skills)): ?>
                        <ul class="tk-language-tags" id="skills-<?php echo e($project->id); ?>">
                            <?php
                                $remainingSkillsCount = $project->skills->count() - 3;
                            ?>

                            <?php $__currentLoopData = $project->skills->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <span class="tk-gray-tag"><?php echo e($skill->name); ?></span>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php if($remainingSkillsCount > 0): ?>
                                <li class="more-skills">
                                    <a href="javascript:void(0)" class="tk-anchor-tag" 
                                    data-toggle="tooltip" 
                                    title="<?php echo e(implode(', ', $project->skills->slice(3)->pluck('name')->toArray())); ?>">
                                    <?php echo e(__('general.more_skills',['count'=> $remainingSkillsCount])); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php $__currentLoopData = $project->skills->slice(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="hidden-skill-<?php echo e($project->id); ?>" style="display: none;">
                                    <span class="tk-gray-tag"><?php echo e($skill->name); ?></span>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="tk-employe-footer">
                    <div class="tk-employe-img">
                        <figure>
                            <?php if(!empty($project->projectAuthor->image)): ?> 
                                <?php  
                                    $image_path     = getProfileImageURL( $project->projectAuthor->image, '130x130' );
                                    $author_image   = !empty($image_path) ? 'storage/' . $image_path : 'images/default-user-130x130.png';
                                ?> 
                                <img src="<?php echo e(asset($author_image)); ?>" alt="img">
                            <?php else: ?> 
                                <img src="<?php echo e(asset('images/default-user-130x130.png')); ?>" alt="img">
                            <?php endif; ?>
                        </figure>
                        <a href="javascript:void(0)">
                            <?php echo e($project->projectAuthor?->full_name); ?>

                        </a>
                    </div>
                    <a href="<?php echo e(route('project-detail', ['slug'=> $project->slug] )); ?>" target="_blank" class="tk-tag tk-btn-card"><?php echo e(__('project.view_detail')); ?></a>
                </div>
            </div>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php if (! $__env->hasRenderedOnce('7e67c8d6-0476-4628-913f-37d15b36e568')): $__env->markAsRenderedOnce('7e67c8d6-0476-4628-913f-37d15b36e568');
$__env->startPush(config('pagebuilder.site_script_var')); ?>
    <script src="<?php echo e(asset('common/js/popper-core.js')); ?>"></script> 
    <script src="<?php echo e(asset('common/js/tippy.js')); ?>"></script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/components/projects.blade.php ENDPATH**/ ?>