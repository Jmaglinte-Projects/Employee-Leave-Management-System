{{-- <div class="relative">
	<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
		<svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
	</div>
	<input datepicker datepicker-autohide type="text" class="
		{{ $class }} @error($wireModel) input-error @enderror
		bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date"
	
		id="{{ $wireModel }}"
		name="{{ $wireModel }}"
		wire:model="{{ $wireModel }}"
	>
</div>
@error($wireModel) <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
 --}}



<div class="relative">
	<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
		<svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
	</div>

	<input id="{{ $name }}" class="block rounded-t-lg pl-10 px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer
	
	@error($name) dark:border-red-500 focus:outline-none focus:ring-0 border-red-600 focus:border-red-600 dark:focus-border-red-500 @enderror
	"
		type="text" 
		placeholder=" " 
		id="{{ $name }}"
		name="{{ $name }}"
		wire:model.lazy="{{ $name }}"

		x-data
		x-ref="{{ $name }}"
		x-init="new Pikaday({ field: $refs.{{$name}},
			toString(date, format) {
				return moment(date).format('YYYY/MM/DD');
			}
 		})"
	/>
	<label for="{{ $name }}" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 
		peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4
		 
		@error($name) e-75 top-4 z-10 origin-[0] left-2.5 text-red-600 dark:text-red-500 @enderror
		
	" style="left: 2.625rem;">{{ $label }}</label>
</div>
@error($name) <p for="{{ $name }}" class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p> @enderror