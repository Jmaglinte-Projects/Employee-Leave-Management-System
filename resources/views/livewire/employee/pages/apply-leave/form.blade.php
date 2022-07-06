<div>
    {{-- The Master doesn't talk, he acts. --}}
	<form wire:submit.prevent="submit">
		<x-message />

		<div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
			<div>
				<x-form.datepicker name="leave_from" wire:model="leave_from" label="From" />
			</div>
			<div>
				<x-form.datepicker name="leave_to" wire:model="leave_to" label="To" />
			</div>
			<div>
				<x-form.select name="leave_leave_type_id" wire:model="leave_leave_type_id" label="Leave Type">
					<option selected>Please select here</option>
					@foreach ($leaveTypes as $type)
						<option value="{{ $type->leave_type_id}}">{{ $type->leave_type_code }}</option>
					@endforeach
				</x-form.select>
                {{ $leave_leave_type_id }}
			</div>
			<div class="col-span-3">
				<x-form.textarea name="leave_reason" wire:model="leave_reason" label="Reason" />
			</div>
		</div>
	</form>
	<div class="mt-5">
        <x-form.action class="block mt-1 w-full" :type="$TYPE" />
	</div>
</div>
