<?php if(projectEnabled()): ?>
	<div class="tk-section tk-employment-section">
		<div class="tk-section_title">
			<?php if(!empty(pagesetting('sub-heading'))): ?><span><?php echo pagesetting('sub-heading'); ?></span></span> <?php endif; ?>
			<?php if(!empty(pagesetting('heading'))): ?><h2><?php echo pagesetting('heading'); ?></h2> <?php endif; ?>
			<?php if(!empty(pagesetting('paragraph'))): ?>
				<p><?php echo pagesetting('paragraph'); ?></p>
			<?php endif; ?>
		</div>
		<?php if (isset($component)) { $__componentOriginalaabcbc41a52d6e58374a1dab995b9e4f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaabcbc41a52d6e58374a1dab995b9e4f = $attributes; } ?>
<?php $component = App\View\Components\Projects::resolve(['limit' => pagesetting('no_of_projects') ?? 6] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('projects'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Projects::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaabcbc41a52d6e58374a1dab995b9e4f)): ?>
<?php $attributes = $__attributesOriginalaabcbc41a52d6e58374a1dab995b9e4f; ?>
<?php unset($__attributesOriginalaabcbc41a52d6e58374a1dab995b9e4f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaabcbc41a52d6e58374a1dab995b9e4f)): ?>
<?php $component = $__componentOriginalaabcbc41a52d6e58374a1dab995b9e4f; ?>
<?php unset($__componentOriginalaabcbc41a52d6e58374a1dab995b9e4f); ?>
<?php endif; ?>
		<div class="tk-button-wrapper">
			<a href="<?php echo e(route('search-projects')); ?>" class="tk-btn-two tk-btn-task">
				<?php if(!empty(pagesetting('btn_text'))): ?>
					<span><?php echo e(pagesetting('btn_text')); ?></span>
				<?php endif; ?> 
				<i class="fa-solid fa-chevron-right"></i>
			</a>
		</div>
	</div>

	<?php if (! $__env->hasRenderedOnce('6d2bd145-4a5b-4921-9d42-3a0de2aeebea')): $__env->markAsRenderedOnce('6d2bd145-4a5b-4921-9d42-3a0de2aeebea');
$__env->startPush(config('pagebuilder.site_script_var')); ?>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$(document).on('click', '.favorite-project', function(){
				let _this = $(this);
				var projectId = $(this).attr('data-project-id');
				var url = '<?php echo e(route("favorite-project", "projectIdToReplace")); ?>';
				$.ajax({
					type:'POST',
					dataType:'json',
					url: url.replace('projectIdToReplace', projectId),
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
<?php endif; ?><?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/projects/view.blade.php ENDPATH**/ ?>