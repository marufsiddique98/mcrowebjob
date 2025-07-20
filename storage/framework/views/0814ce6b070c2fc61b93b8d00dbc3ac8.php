<div class="tk-section tk-faqs-section">
    <div class="tk-section-frequently">
        <?php if(!empty(pagesetting('heading')) || !empty(pagesetting('paragraph'))): ?>
            <div class="tk-section_title">
                <?php if( !empty(pagesetting('heading')) ): ?><h2><?php echo pagesetting('heading'); ?></h2><?php endif; ?>
            </div>
            <div class="tk-jobdescription"> 
                <?php if( !empty(pagesetting('paragraph')) ): ?><p><?php echo pagesetting('paragraph'); ?></p><?php endif; ?>
            </div>
        <?php endif; ?>  
    </div>
</div>

<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/paragraph/view.blade.php ENDPATH**/ ?>