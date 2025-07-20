<div class="tk-section tk-blog-section">
    <?php if(!empty(pagesetting('heading')) || !empty(pagesetting('paragraph'))): ?>
        <div class="tk-section_title">
            <?php if( !empty(pagesetting('heading')) ): ?><h2><?php echo pagesetting('heading') ?? ''; ?></h2><?php endif; ?>
            <?php if( !empty(pagesetting('paragraph')) ): ?><p><?php echo pagesetting('paragraph') ?? ''; ?></p><?php endif; ?>
        </div>
    <?php endif; ?>  
    <?php if(!empty(pagesetting('blog_data'))): ?>
        <ul class="tk-blog-list">
            <?php $__currentLoopData = pagesetting('blog_data'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <div class="tk-blog-list-item">
                        <figure>
                            <?php if(!empty($option['blog_image'])): ?>
                            <img src="<?php echo e(asset('storage/'.$option['blog_image'][0]['path'])); ?>" alt="frame">
                            <?php endif; ?>
                        </figure>
                        <div class="tk-blog-tag">
                            <?php if( !empty($option['sub_heading']) ): ?><span><?php echo $option['sub_heading'] ?? ''; ?></span><?php endif; ?>
                            <?php if( !empty($option['date']) ): ?><em><?php echo $option['date'] ?? ''; ?></em><?php endif; ?>
                        </div>
                        <?php if( !empty($option['blog_heading']) ): ?><h4><?php echo $option['blog_heading'] ?? ''; ?></h4><?php endif; ?>
                        <?php if( !empty($option['paragraph']) ): ?><p><?php echo $option['paragraph'] ?? ''; ?></p><?php endif; ?>
                    </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
    <?php if( !empty(pagesetting('btn_text')) ): ?>
        <div class="tk-button-wrapper">
            <a href="<?php if( !empty(pagesetting('explore_more_url')) ): ?> <?php echo pagesetting('explore_more_url'); ?><?php endif; ?>" class="tk-btn-two tk-btn-task">
                <span><?php echo pagesetting('btn_text') ?? ''; ?></span>
                <i class="fa-solid fa-chevron-right"></i>
            </a>
        </div>
    <?php endif; ?>
</div><?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/blog/view.blade.php ENDPATH**/ ?>