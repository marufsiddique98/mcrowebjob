<?php if(!empty( pagesetting('counter_repeator'))): ?>
<div class="<?php if(!empty(pagesetting('conuter_description'))): ?> tk-couter-wrapper <?php endif; ?>">
    <?php if(!empty(pagesetting('conuter_description'))): ?>
        <div class="tk-stats-section-content">
            <p><?php echo e(pagesetting('conuter_description')); ?></p>
        </div>
    <?php endif; ?>
    <ul class="tk-counternum">
        <?php $__currentLoopData = pagesetting('counter_repeator'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $counter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <div class="tk-countitem">
                    <?php if(!empty($counter['image'])): ?> <img src="<?php echo e(asset('storage/'.$counter['image'][0]['path'])); ?>" alt="banner"><?php endif; ?>
                    <?php if(!empty($counter['conuter_record'])): ?><h3><?php echo e($counter['conuter_record']); ?></h3><?php endif; ?>
                    <?php if(!empty($counter['heading'])): ?><span><?php echo e($counter['heading']); ?></span><?php endif; ?>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>



<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/counter/view.blade.php ENDPATH**/ ?>