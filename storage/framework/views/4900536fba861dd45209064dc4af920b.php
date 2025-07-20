<div class="tk-section">
    <?php if(!empty(pagesetting('heading')) || !empty(pagesetting('paragraph'))): ?>
        <div class="tk-topcategory tk-section_title">
            <?php if( !empty(pagesetting('heading')) ): ?><h2><?php echo e(pagesetting('heading') ?? ''); ?></h2><?php endif; ?>
            <?php if( !empty(pagesetting('paragraph')) ): ?><p><?php echo pagesetting('paragraph') ?? ''; ?></p><?php endif; ?>
        </div>
    <?php endif; ?> 
    <?php if(!empty(pagesetting('categories_data'))
        || !empty(pagesetting('category_sub_heading'))
        || !empty(pagesetting('category_description'))
        || !empty(pagesetting('btn_url'))
        || !empty(pagesetting('btn_text'))): ?>
        <ul class="tk-topcategory-list">
            <?php $__currentLoopData = pagesetting('categories_data'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!empty($option['image'])
                    || !empty($option['sub_heading'])
                    || !empty($option['description'])): ?>
                    <li>
                        <div class="tk-topcategory-card">
                            <?php if(!empty($option['image'])): ?><img width="50" height="50" src="<?php echo e(asset('storage/'.$option['image'][0]['path'])); ?>" alt="frame"><?php endif; ?>
                            <?php if( !empty($option['sub_heading']) ): ?><h3><?php echo $option['sub_heading'] ?? ''; ?></h3><?php endif; ?>
                            <?php if( !empty($option['description']) ): ?><p><?php echo e($option['description'] ?? ''); ?></p><?php endif; ?>
                        </div>
                    </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(!empty(pagesetting('category_sub_heading'))
                || !empty(pagesetting('category_description'))
                || !empty(pagesetting('btn_url'))
                || !empty(pagesetting('btn_text'))): ?>
                <li>
                    <div class="tk-topcategory-card tk-topcategory-cardvtwo">
                        <?php if( !empty(pagesetting('category_sub_heading')) ): ?><h3><?php echo e(pagesetting('category_sub_heading') ?? ''); ?></h3><?php endif; ?>
                        <?php if( !empty(pagesetting('category_description')) ): ?><p><?php echo pagesetting('category_description') ?? ''; ?></p><?php endif; ?>
                        <a href="<?php if( !empty(pagesetting('btn_url')) ): ?> <?php echo pagesetting('btn_url'); ?><?php endif; ?>" class="tk-btn-primary">
                            <?php if( !empty(pagesetting('btn_text')) ): ?><span><?php echo e(pagesetting('btn_text') ?? ''); ?></span><?php endif; ?>
                        </a>
                    </div>
                </li>
            <?php endif; ?>
        </ul>
    <?php endif; ?>
</div><?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/top-categories/view.blade.php ENDPATH**/ ?>