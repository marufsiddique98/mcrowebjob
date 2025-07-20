<ul class="tk-offering_list">
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if( !$single->children->isEmpty() ): ?>
            <li>
                <div class="tk-offcard">
                    <div class="tk-offcard_head">
                            <h3><?php echo $single->name; ?></h3>
                        <ul class="tk-offcard_listing">
                            <?php if( !$single->children->isEmpty() ): ?>

                                <?php $__currentLoopData = $single->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(route('search-projects', ['category' => $child->slug])); ?>" target="_blank">
                                            <span><?php echo $child->name; ?></span>
                                            <em>(<?php echo e($child->children_count); ?>)</em>
                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?> 
                        </ul>
                        <div class="tk-offcard_footer">
                            <a href="<?php echo e(route('search-projects', ['category' => $single->slug])); ?>" target="_blank" class="tk-btn-card" data-action="hover-effect">
                                <span><?php echo e(__('pages.explore_all')); ?></span>
                            </a>
                        </div>
                    </div>
                    <?php  
                        $image_url  = 'images/default-img-306x200.png'; 
                        if ( !empty($single->image) ){
                            $image = @unserialize($single->image);
                            if( $image == 'b:0;' || $image !== false ){
                                $file_path      = $image['file_path'];
                                $image_sizes    = !empty($image['sizes']) ? $image['sizes'] : null;
                                $image_url      = !empty($image_sizes['306x200']) ? 'storage/'.$image_sizes['306x200'] : 'storage/'.$file_path;
                            }
                        }
                    ?>
                    <figure class="tk-offcard_img">
                        <img src="<?php echo e(asset($image_url)); ?>" alt="<?php echo e($single->name); ?>">
                    </figure>
                </div>
            </li>
        <?php endif; ?> 
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>



<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/components/popular-categories.blade.php ENDPATH**/ ?>