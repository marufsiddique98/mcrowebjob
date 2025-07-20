<div x-data="{ open: false}">
    <div  class="tk-hastippy" x-on:mouseover="open = true" x-on:mouseleave="open = false">
        <i class="fa-solid fa-circle-check"></i> 
        <span class="tk-tippycontent" x-show="open" style="display: none;">
            <?php echo e(__('general.verified_user')); ?>

        </span>
    </div>
</div><?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/components/verified-tippy.blade.php ENDPATH**/ ?>