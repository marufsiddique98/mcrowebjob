<?php
    $style = '';
    if(!empty(pagesetting('bg_color')) && pagesetting('bg_color') != 'rgba(0,0,0,0)') {
        $style .= "background-color: ".pagesetting('bg_color').";";
    }
    if(!empty(pagesetting('border_color')) && pagesetting('border_color') != 'rgba(0,0,0,0)') {
        $style .= "border-color: ".pagesetting('border_color').";";
    }
?>

<div class="tk-expolreproject">
    <div class="tk-projectcard-wrapper">
        <div class="tk-cardproject" data-color="<?php if(!empty(pagesetting('bg_color')) && pagesetting('bg_color') != 'rgba(0,0,0,0)'): ?><?php echo e(pagesetting('bg_color')); ?><?php endif; ?>" style="<?php echo e($style); ?>">
            <div class="tk-cardprojecttitle">
                <?php if(!empty(pagesetting('sub-heading'))): ?><strong><?php echo e(pagesetting('sub-heading')); ?></strong><?php endif; ?>
                <?php if(!empty(pagesetting('heading'))): ?><h4><?php echo e(pagesetting('heading')); ?></h4><?php endif; ?>
                <?php if(!empty(pagesetting('paragraph'))): ?><p><?php echo e(pagesetting('paragraph')); ?></p><?php endif; ?>
                <?php if(!empty(pagesetting('btn_text'))): ?>
                    <button class="tk-btn tk-btnblue"><?php echo e(pagesetting('btn_text')); ?></button>
                <?php else: ?>
                    <a href="<?php echo e(pagesetting('btn_url')); ?>"><i class="fas fa-chevron-right"></i></a>
                <?php endif; ?>
            </div>
            <figure>
                <?php if(!empty(pagesetting('image'))): ?> <img src="<?php echo e(asset('storage/'.pagesetting('image')[0]['path'])); ?>" alt="img"><?php endif; ?>
            </figure>
        </div>
    </div>
</div>

<?php if (! $__env->hasRenderedOnce('029c18e9-2904-4a0d-8e7b-29b393769a29')): $__env->markAsRenderedOnce('029c18e9-2904-4a0d-8e7b-29b393769a29');
$__env->startPush(config('pagebuilder.site_script_var')); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.tk-cardproject').forEach(box => {
            const color = box.getAttribute('data-color');
            box.style.setProperty('--gradiant-color', color);
        });
    });
</script>
<?php $__env->stopPush(); endif; ?>




<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/explore-project/view.blade.php ENDPATH**/ ?>