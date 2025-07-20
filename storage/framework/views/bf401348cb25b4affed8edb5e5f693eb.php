<?php if(gigEnabled()): ?>
	<div class="tk-work-section <?php echo e(pagesetting('theme_style')); ?>">
		<div class="tk-work-content">
			<?php if(!empty(pagesetting('sub-heading')) || !empty(pagesetting('heading')) || !empty(pagesetting('paragraph'))): ?>
				<div class="tk-work-title">
					<?php if(!empty(pagesetting('sub-heading'))): ?><strong><?php echo pagesetting('sub-heading'); ?></strong> <?php endif; ?>
					<?php if(!empty(pagesetting('heading'))): ?><h4><?php echo pagesetting('heading'); ?></h4> <?php endif; ?>
					
					<?php if(!empty(pagesetting('paragraph'))): ?><p><?php echo pagesetting('paragraph'); ?></p><?php endif; ?>
				</div>
			<?php endif; ?>
			<?php
			$explorTaskBtn    = pagesetting('btn_text');
			?>

			<?php if (isset($component)) { $__componentOriginal8d43965c2288cc7dee0c4703d4b4876f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8d43965c2288cc7dee0c4703d4b4876f = $attributes; } ?>
<?php $component = App\View\Components\TopGigs::resolve(['limit' => pagesetting('theme_style') == 'tk-work-boxed' ? 8 : 6] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('top-gigs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TopGigs::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8d43965c2288cc7dee0c4703d4b4876f)): ?>
<?php $attributes = $__attributesOriginal8d43965c2288cc7dee0c4703d4b4876f; ?>
<?php unset($__attributesOriginal8d43965c2288cc7dee0c4703d4b4876f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8d43965c2288cc7dee0c4703d4b4876f)): ?>
<?php $component = $__componentOriginal8d43965c2288cc7dee0c4703d4b4876f; ?>
<?php unset($__componentOriginal8d43965c2288cc7dee0c4703d4b4876f); ?>
<?php endif; ?>
		</div>
	</div>


	<?php if (! $__env->hasRenderedOnce('a18387ca-1e49-4773-bf0d-b5dd60ad7910')): $__env->markAsRenderedOnce('a18387ca-1e49-4773-bf0d-b5dd60ad7910');
$__env->startPush(config('pagebuilder.site_script_var')); ?>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$(document).on('click', '.favorite-gig', function(){
				let _this = $(this);
				var gigId = $(this).attr('data-gig-id');
				var url = '<?php echo e(route("favorite-gig", "gigIdToReplace")); ?>';
				$.ajax({
					type:'POST',
					dataType:'json',
					url: url.replace('gigIdToReplace', gigId),
					success: function() {
						_this.toggleClass("active")
					},
					error: function(xhr) {
						let err = JSON.parse(xhr.responseText);
						showAlert({
							message     : err.message,
							title       : err.title        ? err.title : '' ,
							type        : err.type,
							autoclose   : 2000,
						});
					}
				});
			});
		});
	</script>
	<?php $__env->stopPush(); endif; ?>
<?php endif; ?>	<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/gigs/view.blade.php ENDPATH**/ ?>