<div>
    {{-- Do your work, then step back. --}}
	<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee') }}
        </h2>
    </x-slot>
	<div class="xxx">
		<livewire:pages.employee.table /> 
		<livewire:pages.employee.form /> 

	</div>
</div>
