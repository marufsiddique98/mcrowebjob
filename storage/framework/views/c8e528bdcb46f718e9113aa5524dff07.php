<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['skill']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['skill']); ?>
<?php foreach (array_filter((['skill']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<li class="level-<?php echo e($skill->depth); ?>">
    <input type="radio" value="<?php echo e($skill->id); ?>" wire:model="parentId" id="skill-item-<?php echo e($skill->id); ?>">
    <label for="skill-item-<?php echo e($skill->id); ?>"><?php echo e($skill->name); ?></label>
</li>
<?php $__currentLoopData = $skill->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if (isset($component)) { $__componentOriginal963b4c6c6d64961f6e3a09046fc16fdd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal963b4c6c6d64961f6e3a09046fc16fdd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.skill-item','data' => ['skill' => $child]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.skill-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['skill' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($child)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal963b4c6c6d64961f6e3a09046fc16fdd)): ?>
<?php $attributes = $__attributesOriginal963b4c6c6d64961f6e3a09046fc16fdd; ?>
<?php unset($__attributesOriginal963b4c6c6d64961f6e3a09046fc16fdd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal963b4c6c6d64961f6e3a09046fc16fdd)): ?>
<?php $component = $__componentOriginal963b4c6c6d64961f6e3a09046fc16fdd; ?>
<?php unset($__componentOriginal963b4c6c6d64961f6e3a09046fc16fdd); ?>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/components/admin/skill-item.blade.php ENDPATH**/ ?>