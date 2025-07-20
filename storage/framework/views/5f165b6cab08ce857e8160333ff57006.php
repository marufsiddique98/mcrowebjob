<!-- Online Marketplace 2  START -->
<div class="tk-section tk-talent-section <?php echo e(pagesetting('seller_verient')); ?>">
	<?php if(!empty(pagesetting('sub-heading')) || !empty(pagesetting('heading')) || !empty(pagesetting('paragraph'))): ?>
		<div class="tk-section_title tk-service-title">
			<?php if(!empty(pagesetting('sub-heading'))): ?><span><?php echo pagesetting('sub-heading'); ?></span><?php endif; ?>
			<?php if(!empty(pagesetting('heading'))): ?><h2><?php echo pagesetting('heading'); ?></h2> <?php endif; ?>
			<?php if(!empty(pagesetting('paragraph'))): ?>
				<div class="tk-section_desciption">
					<p><?php echo pagesetting('paragraph'); ?></p>
				</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>
	<?php if (isset($component)) { $__componentOriginalb255ba208dc3058553c8fdf338cd07b7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb255ba208dc3058553c8fdf338cd07b7 = $attributes; } ?>
<?php $component = App\View\Components\Sellers::resolve(['limit' => pagesetting('no_of_sellers') ?? 6] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sellers'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Sellers::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb255ba208dc3058553c8fdf338cd07b7)): ?>
<?php $attributes = $__attributesOriginalb255ba208dc3058553c8fdf338cd07b7; ?>
<?php unset($__attributesOriginalb255ba208dc3058553c8fdf338cd07b7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb255ba208dc3058553c8fdf338cd07b7)): ?>
<?php $component = $__componentOriginalb255ba208dc3058553c8fdf338cd07b7; ?>
<?php unset($__componentOriginalb255ba208dc3058553c8fdf338cd07b7); ?>
<?php endif; ?>
	<?php if( !empty(pagesetting('btn_text')) ): ?>
		<div class="tk-button-wrapper">
			<a href="<?php echo e(route('search-sellers')); ?>" class="tk-btn-two tk-btn-task">
				<span><?php echo pagesetting('btn_text') ?? ''; ?></span>
				<i class="fa-solid fa-chevron-right"></i>
			</a>
		</div>
	<?php endif; ?>
</div>
<!-- Online Marketplace 2 END -->

<?php if (! $__env->hasRenderedOnce('0816dac7-0c5c-4952-a01d-dea692bb473f')): $__env->markAsRenderedOnce('0816dac7-0c5c-4952-a01d-dea692bb473f');
$__env->startPush(config('pagebuilder.site_script_var')); ?>
<script>
	function redirectToLogin() {
    	window.location.href = "/login";
	}
</script>
<?php $__env->stopPush(); endif; ?><?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/sellers/view.blade.php ENDPATH**/ ?>