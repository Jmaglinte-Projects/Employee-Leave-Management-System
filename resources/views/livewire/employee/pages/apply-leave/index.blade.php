<div>
    {{-- Do your work, then step back. --}}
	<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Apply Leave') }}
        </h2>
    </x-slot>
	<div class="xxx">
		<section>
			<livewire:employee.pages.apply-leave.form />
		</section> 
	</div>
</div>
