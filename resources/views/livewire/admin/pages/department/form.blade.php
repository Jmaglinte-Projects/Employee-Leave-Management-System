<div>
    {{-- In work, do what you enjoy. --}}
	<form wire:submit.prevent="submit">
		<x-message />

	  	<div>
			<x-form.input name="dep_code" wire:model="dep_code" label="Department Code" autofocus=true  />
		</div>
		<div class="mt-4">
			<x-form.input name="dep_name" wire:model="dep_name" label="Department Name" />
		</div>
	</form>
	<div class="mt-5">
        <x-form.action class="block mt-1 w-full" :type="$TYPE" />
	</div>
</div>
