<div class="tk-homebanner tk-hero-banner-eight">
    <?php
        $searchText         = pagesetting('search-btn-txt');
        $searchPlaceholder  = pagesetting('search-placeholder');
    ?>
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
    <div class="tk-homebanner_trustedby">
        <?php if(!empty(pagesetting('trusted-by-heading'))): ?>
            <span><?php echo e(pagesetting('trusted-by-heading')); ?></span>
        <?php endif; ?>
        <?php if(is_array(pagesetting('trusted-by-image')) && count(pagesetting('trusted-by-image')) > 0): ?>
            <ul class="tk-homebanner_trustedby_list">
                <?php $__currentLoopData = pagesetting('trusted-by-image'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <img src="<?php echo e(asset('storage/'.$image['path'])); ?>" alt="image">
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>
    </div>
</div><?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/search-banner/view.blade.php ENDPATH**/ ?>