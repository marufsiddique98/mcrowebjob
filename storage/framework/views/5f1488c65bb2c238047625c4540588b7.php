<!-- HOW ITS WORK START -->
<div class="tk-howitwork">
    <div class="tk-howworkwrapper">
        <div class="tk-howworkleft <?php echo e(pagesetting('theme_style') == 'light' ? 'tk-howitworkvtwo' : ''); ?>">
            <div class="tk-workinfo">
                <?php if(!empty(pagesetting('sub-heading')) || !empty(pagesetting('heading'))): ?>
                    <div class="tk-section_title">
                        <?php if(!empty(pagesetting('sub-heading'))): ?><span><?php echo pagesetting('sub-heading'); ?></span><?php endif; ?>
                        <?php if(!empty(pagesetting('heading'))): ?><h2><?php echo pagesetting('heading'); ?></h2><?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if(!empty(pagesetting('working-steps-repeater'))): ?>
                    <ul class="tk-workinglist">
                        <?php $__currentLoopData = pagesetting('working-steps-repeater'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <div class="tk-howworklist">
                                    <span class="<?php if(!empty($step['icon_color'])): ?> <?php echo $step['icon_color']; ?> <?php endif; ?>"><?php if(!empty($step['icon'])): ?> <?php echo $step['icon']; ?> <?php endif; ?></span>
                                    <div class="tk-workslist">
                                        <?php if(!empty($step['heading'])): ?><h4><?php echo $step['heading']; ?></h4><?php endif; ?>
                                        <?php if(!empty($step['paragraph'])): ?><p><?php echo $step['paragraph']; ?></p><?php endif; ?>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
        <?php if(!empty(pagesetting('image'))): ?>
            <div class="tk-howworkright">
                <figure>
                    <?php if(!empty(pagesetting('image'))): ?> <img src="<?php echo e(asset('storage/'.pagesetting('image')[0]['path'])); ?>" alt="banner"> <?php endif; ?>
                </figure>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- HOW ITS WORK END -->


   <?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/working-steps/view.blade.php ENDPATH**/ ?>