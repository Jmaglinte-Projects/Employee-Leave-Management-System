<div class="mt-5">
    {{-- In work, do what you enjoy. --}}

	<form wire:submit.prevent="submit">
		<x-message />

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
				<x-form.input name="email" type="email" wire:model="email" label="Email" />
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
