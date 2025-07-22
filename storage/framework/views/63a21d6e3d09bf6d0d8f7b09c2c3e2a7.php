<!-- Counter section start -->
<div class="tk-profile-content <?php echo e(pagesetting('theme_style') == 'dark' ? 'tk-profile-contentvtwo' : ''); ?>">
    <div class="tk-tagline">
        <?php if(!empty(pagesetting('sub-heading'))): ?><span><?php echo pagesetting('sub-heading'); ?></span><?php endif; ?>
    </div>
    <?php if(!empty(pagesetting('heading'))): ?><h2><?php echo pagesetting('heading'); ?></h2><?php endif; ?>
    <?php if(!empty(pagesetting('paragraph'))): ?>
        <p><?php echo pagesetting('paragraph'); ?></p>
    <?php endif; ?>
    <?php if(!empty( pagesetting('list-data'))): ?>
        <ul class="tk-bannerlist">
            <?php $__currentLoopData = pagesetting('list-data'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <?php echo $data['list_item']; ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
    <?php if( !empty(pagesetting('get_started_url')) || !empty(pagesetting('get_started_btn'))): ?>
        <a href="<?php if( !empty(pagesetting('get_started_url')) ): ?> <?php echo pagesetting('get_started_url'); ?><?php endif; ?>" class="tk-btn-primary">
            <span><?php if( !empty(pagesetting('get_started_btn')) ): ?> <?php echo pagesetting('get_started_btn'); ?><?php endif; ?></span>
        </a>
    <?php endif; ?>
</div>
<!-- Counter section start -->

<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/content-with-bullets/view.blade.php ENDPATH**/ ?>