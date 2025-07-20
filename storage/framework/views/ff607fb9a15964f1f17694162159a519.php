<div class="tk-homebanner tk-hero-banner-six">
    <?php if(!empty(pagesetting('banner6_repeator'))): ?>
        <div class="swiper tk-bannersixsliger">
            <div class="swiper-wrapper">
                <?php $__currentLoopData = pagesetting('banner6_repeator'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <div class="tk-bannertopserch">
                            <div class="tk-homebanner_content">
                                <?php if(!empty($item['heading'])): ?>
                                    <h1><?php echo $item['heading']; ?></h1>
                                <?php endif; ?>
                                <?php if(!empty($item['paragraph'])): ?>
                                    <p><?php echo $item['paragraph']; ?></p>
                                <?php endif; ?>
                                <div class="tk-homebanner_btnwrapper">
                                    <a href="<?php echo e($item['first_btn_url']); ?>" class="tk-btn">
                                        <?php if(!empty($item['btn_green_text'])): ?>
                                            <span><?php echo e($item['btn_green_text']); ?></span>
                                        <?php endif; ?>
                                    </a>
                                    <a href="<?php if(!empty($item['second_btn_url'])): ?><?php echo e($item['second_btn_url']); ?><?php endif; ?>" class="tk-btn-two" data-action="hover-effect">
                                        <?php if(!empty($item['simple_btn_text'])): ?>
                                            <span><?php echo e($item['simple_btn_text']); ?></span>
                                        <?php endif; ?>
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </a>
                                </div>
                            </div>
                            <figure>
                                <?php if(!empty($item['image'])): ?>
                                    <img src="<?php echo e(asset('storage/'.$item['image'][0]['path'])); ?>" alt="img">
                                <?php endif; ?>
                            </figure>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="tk-paginationarea">
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"> <i class="fa fa-chevron-right"></i></div>
                <div class="swiper-button-prev"> <i class="fa fa-chevron-left"></i></div>
            </div>
        </div>
    <?php endif; ?>
</div>


<?php if (! $__env->hasRenderedOnce('3443000f-26ff-4252-b1a7-50c5e83f2de4')): $__env->markAsRenderedOnce('3443000f-26ff-4252-b1a7-50c5e83f2de4');
$__env->startPush(config('pagebuilder.site_script_var')); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        banner6Slider();
    });
</script>
<?php $__env->stopPush(); endif; ?><?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/banner-with-slider/view.blade.php ENDPATH**/ ?>