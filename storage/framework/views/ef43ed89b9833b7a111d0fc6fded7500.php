<div class="tk-section tk-content-box-wrapper">
    <?php if(!empty(pagesetting('pre_heading')) || !empty(pagesetting('heading')) || !empty(pagesetting('paragraph'))): ?>
        <div class="tk-section_title">
            <?php if( !empty(pagesetting('pre_heading')) ): ?><span><?php echo e(pagesetting('pre_heading') ?? ''); ?></span><?php endif; ?>
            <?php if( !empty(pagesetting('heading')) ): ?><h2><?php echo e(pagesetting('heading') ?? ''); ?></h2><?php endif; ?>
            <?php if( !empty(pagesetting('paragraph')) ): ?><p><?php echo pagesetting('paragraph') ?? ''; ?></p><?php endif; ?>
        </div>
    <?php endif; ?> 
    <?php if(!empty(pagesetting('infobox_data'))
        || !empty(pagesetting('category_sub_heading'))
        || !empty(pagesetting('category_description'))
        || !empty(pagesetting('btn_url'))
        || !empty(pagesetting('btn_text'))): ?>
        <ul class="tk-content-box-list">
            <?php $__currentLoopData = pagesetting('infobox_data'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!empty($option['info_heading'])
                    || !empty($option['sub_heading'])
                    || !empty($option['description'])
                    || !empty($option['info_image'])): ?>
                    <li>
                        <div class="tk-info-box-layout-1">
                            <div class="tk-info-box-content">
                                
                                <?php if( !empty($option['info_heading']) ): ?><h6 class="tk-subtitle"><?php echo e($option['info_heading'] ?? ''); ?></h6><?php endif; ?>
                                <?php if( !empty($option['sub_heading']) ): ?><h2 class="tk-title"><?php echo $option['sub_heading'] ?? ''; ?></h2><?php endif; ?>
                                <?php if( !empty($option['description']) ): ?>
                                    <div class="tk-description">
                                        <p><?php echo e($option['description'] ?? ''); ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <figure class="tk-image">
                            <?php if(!empty($option['info_image'])): ?><img src="<?php echo e(asset('storage/'.$option['info_image'][0]['path'])); ?>" alt="img"><?php endif; ?>             
                            </figure>
                        </div>
                    </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
    <?php if(!empty(pagesetting('note'))): ?>
        <p><?php echo e(pagesetting('note') ?? ''); ?></p>
    <?php endif; ?>
</div><?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/infobox/view.blade.php ENDPATH**/ ?>