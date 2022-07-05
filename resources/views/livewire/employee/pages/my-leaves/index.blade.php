<div>
    {{-- Success is as dangerous as failure. --}}
	<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Apply Leave') }}
        </h2>
    </x-slot>
	<div class="xxx">
		<section>
			<livewire:employee.pages.my-leaves.table />
		</section> 
	</div>
</div>
