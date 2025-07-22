<!-- Online Marketplace  START -->
 <div class="tk-working-flow tk-section">
     <?php if(!empty(pagesetting('sub-heading')) || !empty(pagesetting('heading')) || !empty(pagesetting('paragraph'))): ?>
     <div class="tk-section_title">
         <?php if(!empty(pagesetting('sub-heading'))): ?><span><?php echo e(pagesetting('sub-heading')); ?></span><?php endif; ?>
         <?php if(!empty(pagesetting('heading'))): ?><h2><?php echo e(pagesetting('heading')); ?></h2><?php endif; ?>
         <?php if(!empty(pagesetting('paragraph'))): ?>
            <div class="tk-section_desciption">
                <p><?php echo e(pagesetting('paragraph')); ?></p>
            </div>
         <?php endif; ?>
     </div>
     <?php endif; ?>
     <?php if(!empty( pagesetting('market_place_repeator'))): ?>
     <div class="tk-marketplace">
        <div class="swiper tk-marketplace-slider">
            <div class="swiper-wrapper">
                <?php $__currentLoopData = pagesetting('market_place_repeator'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <div class="tk-marketitem">
                            <figure>
                                <?php if(!empty($item['image_sub_heading'])): ?><span><?php echo e($item['image_sub_heading']); ?></span><?php endif; ?>
                                <?php if(!empty($item['image'])): ?> <img src="<?php echo e(asset('storage/'.$item['image'][0]['path'])); ?>" alt="img"><?php endif; ?>
                                <?php if(!empty($item['image_heading'])): ?>
                                    <a href="#">
                                        <?php echo e($item['image_heading']); ?>

                                    </a>
                                <?php endif; ?>
                            </figure>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="swiper-scrollbar"></div>
     </div>
     <?php endif; ?>
</div>
<!-- Online Marketplace END -->

<?php if (! $__env->hasRenderedOnce('9bc4948c-1c28-4fc1-9b47-355f2a93594b')): $__env->markAsRenderedOnce('9bc4948c-1c28-4fc1-9b47-355f2a93594b');
$__env->startPush(config('pagebuilder.site_script_var')); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        marketplaceSlider()
    });
</script>
<?php $__env->stopPush(); endif; ?>



<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/market-place/view.blade.php ENDPATH**/ ?>