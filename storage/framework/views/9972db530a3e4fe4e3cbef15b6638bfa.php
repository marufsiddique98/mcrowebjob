<?php if(packagesEnabled()): ?>
	<div class="tk-section tk-package-section">
		<div class="tk-section-busines">
			<div class="tk-section_title">
				<?php if(!empty(pagesetting('sub-heading'))): ?><span><?php echo pagesetting('sub-heading'); ?></span> <?php endif; ?>
				<?php if(!empty(pagesetting('heading'))): ?><h2><?php echo pagesetting('heading'); ?></h2> <?php endif; ?>
				<?php if(!empty(pagesetting('paragraph'))): ?>
					<p><?php echo pagesetting('paragraph'); ?></p>
				<?php endif; ?>
			</div>
			<div class="tk-busines">
				<div class="tk-busines_content">
					<?php if(!empty(pagesetting('btn_heading'))): ?><em><?php echo pagesetting('btn_heading'); ?></em> <?php endif; ?>
					<div class="tk-busines_content_tabs">
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<button class="nav-link active" id="saller-tab" data-bs-toggle="tab" data-bs-target="#saller" type="button" role="tab" aria-controls="saller" aria-selected="true"><?php if(!empty(pagesetting('talent_btn_text'))): ?><?php echo pagesetting('talent_btn_text'); ?> <?php endif; ?></button>
							<button class="nav-link" id="buyer-tab" data-bs-toggle="tab" data-bs-target="#buyer" type="button" role="tab" aria-controls="buyer" aria-selected="false"><?php if(!empty(pagesetting('employer_btn_text'))): ?><?php echo pagesetting('employer_btn_text'); ?> <?php endif; ?></button>
						</div>
					</div>
				</div>
				<?php if (isset($component)) { $__componentOriginal414073c4b9d5e3fd1c9593518b091ba0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal414073c4b9d5e3fd1c9593518b091ba0 = $attributes; } ?>
<?php $component = App\View\Components\Packages::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('packages'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Packages::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal414073c4b9d5e3fd1c9593518b091ba0)): ?>
<?php $attributes = $__attributesOriginal414073c4b9d5e3fd1c9593518b091ba0; ?>
<?php unset($__attributesOriginal414073c4b9d5e3fd1c9593518b091ba0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal414073c4b9d5e3fd1c9593518b091ba0)): ?>
<?php $component = $__componentOriginal414073c4b9d5e3fd1c9593518b091ba0; ?>
<?php unset($__componentOriginal414073c4b9d5e3fd1c9593518b091ba0); ?>
<?php endif; ?>
			</div>
			<?php if(!empty(pagesetting('note_heading'))): ?><span><?php echo pagesetting('note_heading'); ?></span> <?php endif; ?>
		</div>
	</div>
<?php endif; ?><?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/pagebuilder/packages/view.blade.php ENDPATH**/ ?>