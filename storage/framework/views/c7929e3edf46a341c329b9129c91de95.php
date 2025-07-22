<div class="tk-section tk-faqs-section">
    <div class="tk-section-frequently">
        <?php if(!empty(pagesetting('sub-heading')) || !empty(pagesetting('heading')) || !empty(pagesetting('paragraph'))): ?>
            <div class="tk-section_title">
                <?php if( !empty(pagesetting('sub-heading')) ): ?><span><?php echo pagesetting('sub-heading'); ?></span><?php endif; ?>
                <?php if( !empty(pagesetting('heading')) ): ?><h2><?php echo pagesetting('heading'); ?></h2><?php endif; ?>
                <?php if( !empty(pagesetting('paragraph')) ): ?><p><?php echo pagesetting('paragraph'); ?></p><?php endif; ?>
                <a href="<?php if( !empty(pagesetting('contact_us_url')) ): ?> <?php echo pagesetting('contact_us_url'); ?><?php endif; ?>" class="tk-btn-primary">
                    <span><?php if( !empty(pagesetting('contact_us_btn')) ): ?> <?php echo pagesetting('contact_us_btn'); ?><?php endif; ?></span>
                </a>
            </div>
        <?php endif; ?>  
        <?php if(!empty(pagesetting('faqs_data'))): ?>                      
            <div class="tk-section-accordion" id="FaqAccordion">
                <?php $__currentLoopData = pagesetting('faqs_data'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="accordion-item">
                        <div class="accordion-header" id="heading<?php echo e($key); ?>">
                            <button class="accordion-button <?php echo e($loop->first ? 'show' : ''); ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($key); ?>" aria-expanded="<?php echo e($loop->first ? 'true' : 'false'); ?>">
                                <?php echo $faq['question']; ?>

                            </button>
                        </div>
                        <div id="collapse<?php echo e($key); ?>" class="accordion-collapse collapse <?php echo e($loop->first ? 'show' : ''); ?>" aria-labelledby="heading<?php echo e($key); ?>" data-bs-parent="#FaqAccordion">
                            <div class="tk-accordion-body">
                                <p><?php echo $faq['answer']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>                        
        <?php endif; ?>
    </div>
</div>

<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/faqs/view.blade.php ENDPATH**/ ?>