<div>
    {{-- In work, do what you enjoy. --}}

	<form wire:submit.prevent="submit">
		<x-message />
	  	<div>
			<x-form.input name="leave_type_code" wire:model="leave_type_code" label="Leave Type" autofocus=true  />
		</div>

		<div class="mt-4">
			<x-form.input name="leave_type_desc" wire:model="leave_type_desc" label="Leave Description"  />
		</div>
	</form>

	<div class="mt-5">
        <x-form.action class="block mt-1 w-full" :type="$TYPE" />
	</div>

</div>