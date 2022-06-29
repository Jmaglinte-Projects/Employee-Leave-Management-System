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
									Employee Id
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Name
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Department
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Status
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Reg. Date
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider" style="width: 125px;"></th>
							</tr>
						</thead>
						<tbody>
							<?php if(count($employees) > 0): ?>
								<?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr class="hover:bg-slate-100">
										<td class="px-5 py-2 border-b border-gray-200 text-sm">
											<p class="text-gray-900 whitespace-no-wrap"><?php echo e($employee->id); ?></p>
										</td>
										<td class="px-5 py-2 border-b border-gray-200 text-sm">
											<p class="text-gray-900 whitespace-no-wrap"><?php echo e($employee->user_last_name); ?>, <?php echo e($employee->user_first_name); ?></p>
										</td>
										<td class="px-5 py-2 border-b border-gray-200 text-sm">
											<p class="text-gray-900 whitespace-no-wrap"><?php echo e($employee->dep_code); ?></p>
										</td>
										<td class="px-5 py-2 border-b border-gray-200 text-sm">
											<p class="text-gray-900 whitespace-no-wrap">
												<?php if($employee->user_status == 'ACTIVE'): ?>
													<span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900"><?php echo e($employee->user_status); ?></span>
												<?php endif; ?>
												<?php if($employee->user_status == 'INACTIVE'): ?>
													<span class="bg-red-100 text-red-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900"><?php echo e($employee->user_status); ?></span>
												<?php endif; ?>
												
											</p>
										</td>
										<td class="px-5 py-2 border-b border-gray-200 text-sm">
											<p class="text-gray-900 whitespace-no-wrap"><?php echo e($employee->created_at); ?></p>
										</td>
										<td class="px-5 py-2 border-b border-gray-200 text-sm">
											<p class="text-gray-900 whitespace-no-wrap">
												<span class="material-symbols-outlined cursor-pointer hover:hover:bg-slate-200 p-2 rounded" wire:click="edit(<?php echo e($employee->id); ?>)">
												edit
												</span>
												<span class="material-symbols-outlined cursor-pointer hover:hover:bg-red-500 p-2 rounded" wire:click="destroy(<?php echo e($employee->id); ?>)">
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
					<?php echo e($employees->links()); ?>

				</div>
			</div>
		</div>
	</div>
</div>
<?php /**PATH C:\Users\j.maglinte\Desktop\Repositories\LARAVEL\first-project\resources\views/livewire/pages/employee/table.blade.php ENDPATH**/ ?>