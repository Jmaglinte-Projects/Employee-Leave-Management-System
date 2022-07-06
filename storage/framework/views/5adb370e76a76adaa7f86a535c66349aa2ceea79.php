<div>
    
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Apply Leave')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
	<div class="xxx">
		<section>
			<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('employee.pages.my-leave.table', [])->html();
} elseif ($_instance->childHasBeenRendered('l1105960086-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1105960086-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1105960086-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1105960086-0');
} else {
    $response = \Livewire\Livewire::mount('employee.pages.my-leave.table', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1105960086-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
		</section>
	</div>
</div>
<?php /**PATH C:\Users\j.maglinte\Desktop\Repositories\GITHUB\Employee-Leave-Management-System\resources\views/livewire/employee/pages/my-leave/index.blade.php ENDPATH**/ ?>