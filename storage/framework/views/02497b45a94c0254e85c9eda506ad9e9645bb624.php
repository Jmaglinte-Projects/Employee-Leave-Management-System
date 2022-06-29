<div>
    
	 <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Leave Type')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
	<div class="grid sm:grid-cols-1 md:grid-cols-2 gap-4">
		<section>
			<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pages.leave-type.form', [])->html();
} elseif ($_instance->childHasBeenRendered('l3945563213-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3945563213-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3945563213-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3945563213-0');
} else {
    $response = \Livewire\Livewire::mount('pages.leave-type.form', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3945563213-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
		</section>
		<section>
			<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pages.leave-type.table', [])->html();
} elseif ($_instance->childHasBeenRendered('l3945563213-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3945563213-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3945563213-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3945563213-1');
} else {
    $response = \Livewire\Livewire::mount('pages.leave-type.table', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3945563213-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 
		</section>
	</div>
</div>
<?php /**PATH C:\Users\j.maglinte\Desktop\Repositories\LARAVEL\first-project\resources\views/livewire/pages/leave-type/leave-type.blade.php ENDPATH**/ ?>