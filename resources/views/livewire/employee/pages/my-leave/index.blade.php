<div>
    {{-- The whole world belongs to you. --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Apply Leave') }}
        </h2>
    </x-slot>
	<div class="xxx">
		<section>
			<livewire:employee.pages.my-leave.table />
		</section>
	</div>
</div>
