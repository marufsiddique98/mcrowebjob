<div class="tk-experience-section">
    <?php if(!empty(pagesetting('heading')) || !empty(pagesetting('paragraph'))): ?>
        <div class="tk-topcategory tk-section_title">
            <?php if( !empty(pagesetting('heading')) ): ?><h2><?php echo e(pagesetting('heading') ?? ''); ?></h2><?php endif; ?>
            <?php if( !empty(pagesetting('paragraph')) ): ?><p><?php echo pagesetting('paragraph') ?? ''; ?></p><?php endif; ?>
        </div>
    <?php endif; ?> 
    <?php if(!empty(pagesetting('experience_data'))): ?>
        <ul class="tk-experience-list">
            <?php $__currentLoopData = pagesetting('experience_data'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!empty($option['image'])
                    || !empty($option['sub_heading'])
                    || !empty($option['description'])): ?>
                    <li>
                        <div class="tk-experience-card">
                            <?php if(!empty($option['image'])): ?><img width="88" height="88" src="<?php echo e(asset('storage/'.$option['image'][0]['path'])); ?>" alt="frame"><?php endif; ?>
                            <?php if( !empty($option['sub_heading']) ): ?><h3><?php echo $option['sub_heading'] ?? ''; ?></h3><?php endif; ?>
                            <?php if( !empty($option['description']) ): ?><p><?php echo e($option['description'] ?? ''); ?></p><?php endif; ?>
                        </div>
                    </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
</div><?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/search-experience/view.blade.php ENDPATH**/ ?>