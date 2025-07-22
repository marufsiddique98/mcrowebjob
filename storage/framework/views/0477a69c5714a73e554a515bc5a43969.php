<div class="tk-clients-section">
    <?php if(!empty(pagesetting('heading'))): ?>
        <div class="tk-clients_title"><h2><?php echo pagesetting('heading'); ?></h2></div>
    <?php endif; ?>
    <div id="tk-clients-slider" class="swiper tk-clients-slider">
        <div class="swiper-wrapper">
            <?php if(is_array(pagesetting('images')) && count(pagesetting('images')) > 0): ?>
                <?php $__currentLoopData = pagesetting('images'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <img src="<?php echo e(asset('storage/'.$image['path'])); ?>" alt="image">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php if (! $__env->hasRenderedOnce('860f0368-e76d-4621-9bcf-173abd419e86')): $__env->markAsRenderedOnce('860f0368-e76d-4621-9bcf-173abd419e86');
$__env->startPush(config('pagebuilder.site_script_var')); ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const clientSlider = new Swiper('#tk-clients-slider', {
            slidesPerView: "auto",
            allowTouchMove: false,
            loop: true,
            loopedSlides:8,
            speed: 2000,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
        });

        // Check if there is only one slide
        if (clientSlider.slides.length >= 1) {
        // Clone the slides
        const slides = clientSlider.slides;
        const slidesCount = slides.length;
            for (let i = 0; i < slidesCount; i++) {
                const slide = slides[i].cloneNode(true);
                clientSlider.wrapperEl.appendChild(slide);
            }
        }

    });
</script>
<?php $__env->stopPush(); endif; ?>



<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/brand-slider/view.blade.php ENDPATH**/ ?>