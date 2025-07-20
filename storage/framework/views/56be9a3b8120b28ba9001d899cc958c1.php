<!-- profile section start -->
<div class="wr-profile-section <?php echo e(pagesetting('profile_verient')); ?>">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <figure>
                    <?php if(!empty(pagesetting('image'))): ?> <img src="<?php echo e(asset('storage/'.pagesetting('image')[0]['path'])); ?>" alt="banner"> <?php endif; ?>
                </figure>
            </div>
            <div class="col-6">
                <div class="wr-profile-content">
                    <div class="wr-tagline">
                        <?php if(!empty(pagesetting('sub-heading'))): ?><span><?php echo pagesetting('sub-heading'); ?></span> <?php endif; ?>
                    </div>
                    <?php if(!empty(pagesetting('heading'))): ?><h1><?php echo pagesetting('heading'); ?></h1> <?php endif; ?>
                    <?php if(!empty(pagesetting('paragraph'))): ?>
                        <p><?php echo pagesetting('paragraph'); ?></p>
                    <?php endif; ?>
                    <?php if(!empty( pagesetting('list-data'))): ?>
                        <ul class="wr-bannerlist">
                            <?php $__currentLoopData = pagesetting('list-data'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <?php echo $data['list_item']; ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- profile section end --><?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/profile/view.blade.php ENDPATH**/ ?>