<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['btnText' => 'Explore More Gigs']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['btnText' => 'Explore More Gigs']); ?>
<?php foreach (array_filter((['btnText' => 'Explore More Gigs']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="tk-online-section">
    <ul class="tk-online-main">
        <?php $__currentLoopData = $gigs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <div class="tk-online-content">
                    <div class="tk-online-img-content">
                        <figure class="tk-online-img">
                            <?php 
                                $gig_image = 'images/default-img-286x186.png';
                                if(!empty($gig->attachments['files'])){
                                    $images = $gig->attachments['files'];
                                    $latest = current($images);
                                    if( !empty($latest) && substr($latest->mime_type, 0, 5) == 'image'){
                                        if(!empty($latest->sizes['286x186'])){
                                            $gig_image = 'storage/'.$latest->sizes['286x186'];
                                        } elseif(!empty($latest->file_path)){
                                            $gig_image = 'storage/'.$latest->file_path;
                                        }
                                    }
                                }
                            ?>
                            <img height="230" src="<?php echo e(asset($gig_image)); ?>"  alt="image" />
                        </figure>
                        <?php if(auth()->guard()->guest()): ?>
                            <a href="/login"><i class="fa-regular fa-heart"></i></a>
                        <?php endif; ?>
                        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'buyer')): ?>
                            <a href="javascript:;" data-gig-id="<?php echo e($gig->id); ?>" class="favorite-gig tk-favicon<?php echo e($gig?->is_favourite ? ' active' : ''); ?>"><i class="fa-regular fa-heart"></i></a>
                        <?php endif; ?>
                    </div>
                    <div class="tk-online-info">
                        <div class="tk-online-user">
                            <div class="tk-online-user_content">
                                <figure>
                                    <?php
                                        if( !empty($gig->gigAuthor->image) ){
                                            $image_path      = getProfileImageURL( $gig->gigAuthor->image, '50x50' );
                                            $seller_image    = !empty($image_path) ? '/storage/' . $image_path : '/images/default-user-50x50.png';
                                        }else{
                                            $seller_image = '/images/default-user-50x50.png';
                                        }
                                    ?>
                                    <img src="<?php echo e(asset($seller_image)); ?>" alt="img">
                                </figure>
                                <a href="<?php echo e(route('seller-profile',[ 'slug'=> $gig->gigAuthor->slug ])); ?>">
                                    <?php echo $gig->gigAuthor->full_name; ?> 
                                    <?php if (isset($component)) { $__componentOriginald56140b9ab71a574fd5682ffe46cb241 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald56140b9ab71a574fd5682ffe46cb241 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.verified-tippy','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('verified-tippy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald56140b9ab71a574fd5682ffe46cb241)): ?>
<?php $attributes = $__attributesOriginald56140b9ab71a574fd5682ffe46cb241; ?>
<?php unset($__attributesOriginald56140b9ab71a574fd5682ffe46cb241); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald56140b9ab71a574fd5682ffe46cb241)): ?>
<?php $component = $__componentOriginald56140b9ab71a574fd5682ffe46cb241; ?>
<?php unset($__componentOriginald56140b9ab71a574fd5682ffe46cb241); ?>
<?php endif; ?>
                                </a>
                            </div>
                            <?php if($gig->is_featured == 1): ?>
                                <em><i class="fa-solid fa-bolt"></i><?php echo e(__('general.pro')); ?></em>
                            <?php endif; ?>
                        </div>
                        <a href="<?php echo e(route('gig-detail', [ 'slug'=> $gig->slug ])); ?>"><?php echo $gig->title; ?></a>
                        <div class="tk-online-stars">
                            <span class="tk-stars"></span>
                            <em><?php echo e(ratingFormat($gig->ratings_avg_rating)); ?> /5.0 ( <?php echo e($gig->ratings_count == 1 ? __('general.user_review') : __('general.user_reviews', ['count' => number_format($gig->ratings_count)])); ?> )</em>
                        </div>
                        <?php if(!empty($gig->address)): ?>
                            <div class="tk-online-location">
                                <span><i class="fa-regular fa-location-dot"></i></span>
                                <em><?php echo getUserAddress($gig->address, 'city_state_country'); ?></em>
                            </div>
                        <?php endif; ?>
                        <div class="tk-online-footer">
                            <span><?php echo e(__('gig.starting_from')); ?></span>
                            <strong><?php echo e(getPriceFormat($currency_symbol, $gig->gig_plans_min_price)); ?></strong>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <div class="tk-button-wrapper">
        <a href="<?php echo e(route('search-gigs')); ?>" class="tk-btn-two tk-btn-task">
            <span><?php echo e($btnText); ?></span>
            <i class="fa-solid fa-chevron-right"></i>
        </a>
    </div>
</div>

<?php if (! $__env->hasRenderedOnce('d7760d2f-d3f2-49ca-8480-7c36ec143712')): $__env->markAsRenderedOnce('d7760d2f-d3f2-49ca-8480-7c36ec143712');
$__env->startPush(config('pagebuilder.site_script_var')); ?>
    <script src="<?php echo e(asset('common/js/popper-core.js')); ?>"></script> 
    <script src="<?php echo e(asset('common/js/tippy.js')); ?>"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let tb_tippy = document.querySelectorAll(".tk-hastippy");
            tb_tippy.forEach(function(element) {
                tippy(element, {
                    content: element.querySelector('.tk-tippycontent').innerHTML,
                    animation: "scale",
                });
            });
        });
    </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/components/top-gigs.blade.php ENDPATH**/ ?>