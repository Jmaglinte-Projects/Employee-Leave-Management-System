<div>
    
	<form wire:submit.prevent="submit">
		<?php if (isset($component)) { $__componentOriginalae0fc96714e2a5c93b226fc869a225dc21060012 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Message::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Message::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalae0fc96714e2a5c93b226fc869a225dc21060012)): ?>
<?php $component = $__componentOriginalae0fc96714e2a5c93b226fc869a225dc21060012; ?>
<?php unset($__componentOriginalae0fc96714e2a5c93b226fc869a225dc21060012); ?>
<?php endif; ?>

		<div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
			<div>
				<?php if (isset($component)) { $__componentOriginal5ea59abbe90178d045d7e332a8c22321309a2200 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Form\Datepicker::class, ['name' => 'leave_from','label' => 'From'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.datepicker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Form\Datepicker::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'leave_from']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5ea59abbe90178d045d7e332a8c22321309a2200)): ?>
<?php $component = $__componentOriginal5ea59abbe90178d045d7e332a8c22321309a2200; ?>
<?php unset($__componentOriginal5ea59abbe90178d045d7e332a8c22321309a2200); ?>
<?php endif; ?>
			</div>
			<div>
				<?php if (isset($component)) { $__componentOriginal5ea59abbe90178d045d7e332a8c22321309a2200 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Form\Datepicker::class, ['name' => 'leave_to','label' => 'To'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.datepicker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Form\Datepicker::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'leave_to']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5ea59abbe90178d045d7e332a8c22321309a2200)): ?>
<?php $component = $__componentOriginal5ea59abbe90178d045d7e332a8c22321309a2200; ?>
<?php unset($__componentOriginal5ea59abbe90178d045d7e332a8c22321309a2200); ?>
<?php endif; ?>
			</div>
			<div>
				<?php if (isset($component)) { $__componentOriginal0c320afe67255a3836591594c37d4ada9ba90448 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Form\Select::class, ['name' => 'leave_leave_type_id','label' => 'Leave Type'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Form\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'leave_leave_type_id']); ?>
					<option selected>Please select here</option>
					<?php $__currentLoopData = $leaveTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($type->leave_type_id); ?>"><?php echo e($type->leave_type_code); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0c320afe67255a3836591594c37d4ada9ba90448)): ?>
<?php $component = $__componentOriginal0c320afe67255a3836591594c37d4ada9ba90448; ?>
<?php unset($__componentOriginal0c320afe67255a3836591594c37d4ada9ba90448); ?>
<?php endif; ?>
                <?php echo e($leave_leave_type_id); ?>

			</div>
			<div class="col-span-3">
				<?php if (isset($component)) { $__componentOriginalf8cd5da1f0638b515671893a5c50321461c3eee3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Form\Textarea::class, ['name' => 'leave_reason','label' => 'Reason'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Form\Textarea::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'leave_reason']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf8cd5da1f0638b515671893a5c50321461c3eee3)): ?>
<?php $component = $__componentOriginalf8cd5da1f0638b515671893a5c50321461c3eee3; ?>
<?php unset($__componentOriginalf8cd5da1f0638b515671893a5c50321461c3eee3); ?>
<?php endif; ?>
			</div>
		</div>
	</form>
	<div class="mt-5">
        <?php if (isset($component)) { $__componentOriginalefe7b2bfc87a370d1e6704478a1ce04126d66a6d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Form\Action::class, ['type' => $TYPE] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Form\Action::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'block mt-1 w-full']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalefe7b2bfc87a370d1e6704478a1ce04126d66a6d)): ?>
<?php $component = $__componentOriginalefe7b2bfc87a370d1e6704478a1ce04126d66a6d; ?>
<?php unset($__componentOriginalefe7b2bfc87a370d1e6704478a1ce04126d66a6d); ?>
<?php endif; ?>
	</div>
</div>
<?php /**PATH C:\Users\j.maglinte\Desktop\Repositories\GITHUB\Employee-Leave-Management-System\resources\views/livewire/employee/pages/apply-leave/form.blade.php ENDPATH**/ ?>