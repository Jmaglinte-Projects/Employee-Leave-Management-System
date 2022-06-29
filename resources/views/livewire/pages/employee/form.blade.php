<div class="mt-5">
    {{-- In work, do what you enjoy. --}}

	<form wire:submit.prevent="submit">
		@if (session()->has('message'))
			<div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
				<svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
				<div><span class="font-medium">Success!</span> {{ session('message') }}</div>
			</div>
		@endif

		<div class="grid gap-4 grid-cols-0  sm:grid-cols-2 md:grid-cols-3">
			<div>
				<x-form.input name="user_first_name" wire:model="user_first_name" label="First Name" autofocus=true  />
				
			</div>
			<div>
				<x-form.input name="user_last_name"  wire:model="user_last_name" label="Last Name"/>
			</div>
			<div>
				<x-form.select name="user_gender" wire:model="user_gender" label="Gender"> 
					<option selected>Please select here</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</x-form.select>
			</div>
			<div>
				<x-form.datepicker name="user_birthdate" wire:model.lazy="user_birthdate" label="Birthdate" />
			</div>
			<div>
				<x-form.select name="user_dep_id" wire:model="user_dep_id" label="Department">
					<option selected>Please select here</option>
					@foreach ($departments as $department)
						<option value="{{ $department->dep_id }}">{{ $department->dep_code }}</option>
					@endforeach
				</x-form.select>
			</div>
			<div>
				<x-form.input name="user_mobile" wire:model="user_mobile" label="Mobile" />
			</div>
			<div class="lg:col-span-2 md:col-span-1">
				<x-form.input name="email" type="email"  wire:model="email" label="Email" />
			</div>
			<div>
				<x-form.input name="password"  wire:model="password" type="password" label="Password" />
			</div>
		</div>
	</form>
	
	<div class="mt-5">
        <x-form.action class="block mt-1 w-full" :type="$TYPE" />
	</div>

</div>