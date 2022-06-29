<div>
    
	 <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Employee')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
	<div class="xxx">
		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pages.employee.table', [])->html();
} elseif ($_instance->childHasBeenRendered('l1709053429-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1709053429-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1709053429-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1709053429-0');
} else {
    $response = \Livewire\Livewire::mount('pages.employee.table', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1709053429-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 
		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pages.employee.form', [])->html();
} elseif ($_instance->childHasBeenRendered('l1709053429-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l1709053429-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1709053429-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1709053429-1');
} else {
    $response = \Livewire\Livewire::mount('pages.employee.form', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1709053429-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 

	</div>
</div>
<?php /**PATH C:\Users\j.maglinte\Desktop\Repositories\LARAVEL\first-project\resources\views/livewire/pages/employee/index.blade.php ENDPATH**/ ?>