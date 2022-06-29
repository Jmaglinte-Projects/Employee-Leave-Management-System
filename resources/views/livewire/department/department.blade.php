<div>
    {{-- Do your work, then step back. --}}
	<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Department') }}
        </h2>
    </x-slot>
	<div class="grid sm:grid-cols-1 md:grid-cols-2 gap-4">
		<section>
			<livewire:department.form />
		</section>
		<section>
			<livewire:department.table />
		</section>
	</div>
</div>
