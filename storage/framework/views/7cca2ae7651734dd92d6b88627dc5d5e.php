<div class="sc-banner-01-wrapper <?php echo e(pagesetting('select_verient')); ?>">
    <?php if(pagesetting('media_type') == 'image' && !empty(pagesetting('image')) && pagesetting('select_verient') == 'tk-hero-banner-eleven'): ?>
        <div class="tk-bg-image">
            <img src="<?php echo e(asset('storage/'.pagesetting('image')[0]['path'])); ?>" alt="bg">
        </div>
    <?php endif; ?>
    <div class="tk-homebanner_content">   
        <?php if(!empty(pagesetting('heading'))): ?>
            <h1 class="banner-heading-text-color"><?php echo pagesetting('heading'); ?></h1>
        <?php endif; ?>
    
        <?php if(!empty(pagesetting('paragraph'))): ?>
            <p class="banner-paragraph-text-color"><?php echo pagesetting('paragraph'); ?></p>
        <?php endif; ?>  
        
        <?php
            $searchText         = pagesetting('search-btn-txt');
            $searchPlaceholder  = pagesetting('search-placeholder');
        ?>
        <?php if(is_array(pagesetting('configs_checkbox')) && in_array('search', pagesetting('configs_checkbox'))): ?>
            <?php if (isset($component)) { $__componentOriginal9b33c063a2222f59546ad2a2a9a94bc6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b33c063a2222f59546ad2a2a9a94bc6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.search','data' => ['btnText' => $searchText,'placeholder' => $searchPlaceholder]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['btnText' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($searchText),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($searchPlaceholder)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9b33c063a2222f59546ad2a2a9a94bc6)): ?>
<?php $attributes = $__attributesOriginal9b33c063a2222f59546ad2a2a9a94bc6; ?>
<?php unset($__attributesOriginal9b33c063a2222f59546ad2a2a9a94bc6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9b33c063a2222f59546ad2a2a9a94bc6)): ?>
<?php $component = $__componentOriginal9b33c063a2222f59546ad2a2a9a94bc6; ?>
<?php unset($__componentOriginal9b33c063a2222f59546ad2a2a9a94bc6); ?>
<?php endif; ?>
        <?php endif; ?>  

        <?php if(is_array(pagesetting('configs_checkbox')) && in_array('buttons', pagesetting('configs_checkbox'))): ?>
            <?php if(!empty(pagesetting('buttons_repeater'))): ?>
                <div class="tk-homebanner_btnwrapper">
                    <?php $__currentLoopData = pagesetting('buttons_repeater'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $btn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($btn['btn_url']); ?>" class="<?php if($loop->first): ?>tk-btn <?php else: ?> tk-btn-secondary <?php endif; ?> banner-btn-bg-color-<?php echo e($index); ?>">
                            <?php if(!empty($btn['btn_text'])): ?>
                                <span class="banner-btn-text-color-<?php echo e($index); ?>"><?php echo e($btn['btn_text']); ?></span>
                            <?php endif; ?> 
                            <?php if(!empty($btn['btn_icon'])): ?>
                                <?php echo $btn['btn_icon']; ?>

                            <?php endif; ?> 
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>  
            <?php endif; ?>
        <?php endif; ?>

        <?php if(is_array(pagesetting('configs_checkbox')) && in_array('categories', pagesetting('configs_checkbox'))): ?>
            <div class="tk-homebanner_categories">
                <?php if(pagesetting('select_verient') != 'tk-hero-banner-nine'): ?>
                    <?php if(!empty(pagesetting('category_heading'))): ?>
                        <span class="banner-category-heading-color"><?php echo e(pagesetting('category_heading')); ?></span>
                    <?php endif; ?>
                <?php else: ?>
                    <div class="tk-icon-wrapper">
                        <i class="icon-grid"></i>
                        <span><?php if(!empty(pagesetting('all_category_heading'))): ?><?php echo e(pagesetting('all_category_heading')); ?><?php endif; ?></span>
                    </div>
                <?php endif; ?>

                <?php
                    $textColor  = pagesetting('category_text_color');
                    $bgColor    = pagesetting('category_bg_color');
                ?>
                <?php if (isset($component)) { $__componentOriginale6657570203b501c9d22539f7a15f0d1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6657570203b501c9d22539f7a15f0d1 = $attributes; } ?>
<?php $component = App\View\Components\BannerCategories::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('banner-categories'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BannerCategories::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['categoryTextColor' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($textColor),'categoryBgColor' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($bgColor)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6657570203b501c9d22539f7a15f0d1)): ?>
<?php $attributes = $__attributesOriginale6657570203b501c9d22539f7a15f0d1; ?>
<?php unset($__attributesOriginale6657570203b501c9d22539f7a15f0d1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6657570203b501c9d22539f7a15f0d1)): ?>
<?php $component = $__componentOriginale6657570203b501c9d22539f7a15f0d1; ?>
<?php unset($__componentOriginale6657570203b501c9d22539f7a15f0d1); ?>
<?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if(is_array(pagesetting('configs_checkbox')) && in_array('trusted_by', pagesetting('configs_checkbox'))): ?>
            <div class="tk-homebanner_trustedby">
                <?php if(!empty(pagesetting('trusted_by_heading'))): ?>
                    <span class="banner-trusted-by-heading-text-color"><?php echo e(pagesetting('trusted_by_heading')); ?></span>
                <?php endif; ?>
                <?php if(is_array(pagesetting('trusted_by_image')) && count(pagesetting('trusted_by_image')) > 0): ?>
                    <ul class="tk-homebanner_categories_list">
                        <?php $__currentLoopData = pagesetting('trusted_by_image'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <img src="<?php echo e(asset('storage/'.$image['path'])); ?>" alt="image">
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>
            </div>
        <?php endif; ?>    
    </div>
    
    <?php if(pagesetting('media_type') == 'image'): ?>
        <?php if(pagesetting('media_frame') == 'yes'): ?>
            <div class="tk-bannerframe">
                <img src="<?php echo e(asset('demo-content/banner/frame.webp')); ?>" alt="frame">
                <div class="tk-bannerframe_content">
                    <?php if(!empty(pagesetting('image'))): ?>
                        <img src="<?php echo e(asset('storage/'.pagesetting('image')[0]['path'])); ?>" alt="frame">
                    <?php endif; ?>
                </div>
            </div>
        <?php else: ?>
        <figure>
            <img src="<?php echo e(asset('images/banner.jpg')); ?>" alt="frame">
        </figure>
        <?php endif; ?>
    <?php endif; ?>

    <?php if(pagesetting('media_type') == 'slider'): ?>
        <?php if(pagesetting('media_frame') == 'yes'): ?>
            <div class="tk-bannerframe">
            <img src="<?php echo e(asset('demo-content/banner/frame.webp')); ?>" alt="frame">
                <?php if(!empty(pagesetting('slider_image'))): ?>
                    <div class="tk-bannerframe_content">
                        <div id="tk-banner-slider" class="swiper tk-banner-slider">
                            <div class="swiper-wrapper">
                                <?php $__currentLoopData = pagesetting('slider_image'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="swiper-slide">
                                        <figure>
                                            <img src="<?php echo e(asset('storage/'.$image['path'])); ?>" alt="img">
                                        </figure>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                <?php endif; ?>
            </div>
        <?php elseif(!empty(pagesetting('slider_image'))): ?>
            <div class="tk-bannersingle-slider">
                <div class="swiper <?php echo e(pagesetting('select_verient')); ?>-slider">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = pagesetting('slider_image'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <figure>
                                    <img src="<?php echo e(asset('storage/'.$image['path'])); ?>" alt="img">
                                </figure>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <?php if(pagesetting('media_type') == 'video'): ?>
        <div class="tk-bannerframe">
            <?php if(pagesetting('media_frame') == 'yes'): ?>
                <img src="<?php echo e(asset('demo-content/banner/frame.webp')); ?>" alt="frame">
            <?php endif; ?>
            <div class="tk-bannerframe_content">
                <?php if(!empty(pagesetting('video'))): ?>
                    <video src="<?php echo e(asset('storage/'.pagesetting('video')[0]['path'])); ?>" autoplay muted loop></video>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if(!empty(pagesetting('banner_shape'))): ?>
        <div class="tk-banner-shape">
            <img class="tk-img2svg" src="<?php echo e(asset('storage/'.pagesetting('banner_shape')[0]['path'])); ?>" alt="shape">
        </div>
    <?php endif; ?>

</div>

<?php if (! $__env->hasRenderedOnce('5f2578d8-e81e-484c-ac67-d2ed07cd285d')): $__env->markAsRenderedOnce('5f2578d8-e81e-484c-ac67-d2ed07cd285d');
$__env->startPush(config('pagebuilder.site_script_var')); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        bannerSlider();
        banner2Slider();
        banner3Slider();
        convertImageToSVG()
    });
</script>
<?php $__env->stopPush(); endif; ?>

<?php if (! $__env->hasRenderedOnce('cc472b29-c83d-4301-a6be-f3608a612fe5')): $__env->markAsRenderedOnce('cc472b29-c83d-4301-a6be-f3608a612fe5');
$__env->startPush(config('pagebuilder.site_style_var')); ?>
    <style>
        <?php if(!empty(pagesetting('heading_text_color')) && pagesetting('heading_text_color') != 'rgba(0,0,0,0)'): ?>
            .banner-heading-text-color{
                color: <?php echo e(pagesetting('heading_text_color')); ?> !important;
            }
        <?php endif; ?>

        <?php if(!empty(pagesetting('paragraph_text_color')) && pagesetting('paragraph_text_color') != 'rgba(0,0,0,0)'): ?>
            .banner-paragraph-text-color{
                color: <?php echo e(pagesetting('paragraph_text_color')); ?> !important;
            }
        <?php endif; ?>

        <?php if(is_array(pagesetting('configs_checkbox')) && in_array('buttons', pagesetting('configs_checkbox'))): ?>
            <?php if(!empty(pagesetting('buttons_repeater'))): ?>
                <?php $__currentLoopData = pagesetting('buttons_repeater'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $btn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(!empty($btn['btn_bg_color']) && $btn['btn_bg_color'] != 'rgba(0,0,0,0)'): ?>
                        .banner-btn-bg-color-<?php echo e($index); ?> {
                            background-color: <?php echo e($btn['btn_bg_color']); ?> !important;
                        }
                    <?php endif; ?>

                    <?php if(!empty($btn['btn_text_color']) && $btn['btn_text_color'] != 'rgba(0,0,0,0)'): ?>
                        .banner-btn-text-color-<?php echo e($index); ?> {
                            color: <?php echo e($btn['btn_text_color']); ?> !important;
                        }
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endif; ?>

        <?php if(!empty(pagesetting('category_heading_text_color')) && pagesetting('category_heading_text_color') != 'rgba(0,0,0,0)'): ?>
            .banner-category-heading-color{
                color: <?php echo e(pagesetting('category_heading_text_color')); ?> !important;
            }
        <?php endif; ?>

        <?php if(!empty(pagesetting('trusted_by_heading_text_color')) && pagesetting('trusted_by_heading_text_color') != 'rgba(0,0,0,0)'): ?>
            .banner-trusted-by-heading-text-color{
                color: <?php echo e(pagesetting('trusted_by_heading_text_color')); ?> !important;
            }
        <?php endif; ?>

    </style>
<?php $__env->stopPush(); endif; ?>

<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/banner/view.blade.php ENDPATH**/ ?>