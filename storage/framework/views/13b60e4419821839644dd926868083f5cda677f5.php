<?php foreach($attributes->onlyProps(['value']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['value']); ?>
<?php foreach (array_filter((['value']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<label <?php echo e($attributes->merge(['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300'])); ?>>
    <?php echo e($value ?? $slot); ?>

</label>
<?php /**PATH C:\Users\j.maglinte\Desktop\Repositories\LARAVEL\first-project\resources\views/vendor/jetstream/components/label.blade.php ENDPATH**/ ?>