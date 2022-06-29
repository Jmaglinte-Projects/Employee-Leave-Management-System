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
									ID
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Department Code
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Department Name
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"></th>
							</tr>
						</thead>
						<tbody>
							@if (count($departments) > 0)
								@foreach ($departments as $department)
									<tr class="hover:bg-slate-100">
										<td class="px-5 py-2 border-b border-gray-200 text-sm">
											<p class="text-gray-900 whitespace-no-wrap">{{ $department->dep_id }}</p>
										</td>
										<td class="px-5 py-2 border-b border-gray-200 text-sm">
											<p class="text-gray-900 whitespace-no-wrap">{{ $department->dep_code }}</p>
										</td>
										<td class="px-5 py-2 border-b border-gray-200 text-sm">
											<p class="text-gray-900 whitespace-no-wrap">{{ $department->dep_name }}</p>
										</td>
										<td class="px-5 py-2 border-b border-gray-200 text-sm">
											<p class="text-gray-900 whitespace-no-wrap">
												<span class="material-symbols-outlined cursor-pointer hover:hover:bg-slate-200 p-2 rounded" wire:click="edit({{ $department->dep_id }})">
												edit
												</span>
												<span class="material-symbols-outlined cursor-pointer hover:hover:bg-red-500 p-2 rounded" wire:click="destroy({{ $department->dep_id }})">
												delete
												</span>
											</p>
										</td>
									</tr>
								@endforeach
							@else
								<tr>
									<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm" colspan="3">
										<p class="text-gray-900 whitespace-no-wrap">No records found...</p>
									</td>
								</tr>
							@endif
							
						</tbody>
					</table>

					{{-- <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
						<span class="text-xs xs:text-sm text-gray-900">
                            Showing 1 to 4 of 50 Entries
                        </span>
						<div class="inline-flex mt-2 xs:mt-0">
							<button class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-l">
                                Prev
                            </button>
							&nbsp; &nbsp;
							<button class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-r">
                                Next
                            </button>
						</div>
					</div> --}}

				</div>

				<div class="mt-5">
					{{ $departments->links() }}
				</div>
			</div>
		</div>
	</div>
</div>
