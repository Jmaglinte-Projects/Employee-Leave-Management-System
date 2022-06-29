<div>
    <div class="bg-white p-8 rounded-md w-full basis-1/2">
		<div>
			<div class="-mx-4 sm:-mx-8 px-4 sm:px-8 overflow-x-auto">
				<div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
					<table class="min-w-full leading-normal">
						<thead>
							<tr>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Leave Type
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Description
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider" style="width: 125px;"></th>
							</tr>
						</thead>
						<tbody>
							<?php if(count($leaveTypes) > 0): ?>
								<?php $__currentLoopData = $leaveTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leaveType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr class="hover:bg-slate-100">
										<td class="px-5 py-2 border-b border-gray-200 text-sm">
											<p class="text-gray-900 whitespace-no-wrap"><?php echo e($leaveType->leave_type_code); ?></p>
										</td>
										<td class="px-5 py-2 border-b border-gray-200 text-sm">
											<p class="text-gray-900 whitespace-no-wrap"><?php echo e($leaveType->leave_type_desc); ?></p>
										</td>
										<td class="px-5 py-2 border-b border-gray-200 text-sm">
											<p class="text-gray-900 whitespace-no-wrap">
												<span class="material-symbols-outlined cursor-pointer hover:hover:bg-slate-200 p-2 rounded" wire:click="edit(<?php echo e($leaveType->leave_type_id); ?>)">
												edit
												</span>
												<span class="material-symbols-outlined cursor-pointer hover:hover:bg-red-500 p-2 rounded" wire:click="destroy(<?php echo e($leaveType->leave_type_id); ?>)">
												delete
												</span>
											</p>
										</td>
									</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php else: ?>
								<tr>
									<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm" colspan="3">
										<p class="text-gray-900 whitespace-no-wrap">No records found...</p>
									</td>
								</tr>
							<?php endif; ?>
							
						</tbody>
					</table>

				</div>

				<div class="mt-5">
					<?php echo e($leaveTypes->links()); ?>

				</div>
			</div>
		</div>
	</div>
</div>
<?php /**PATH C:\Users\j.maglinte\Desktop\Repositories\LARAVEL\first-project\resources\views/livewire/pages/leave-type/table.blade.php ENDPATH**/ ?>