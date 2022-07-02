<div class="actions">
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    @switch($type)
        @case('CREATE')
            <button
                type="button"
                class=" mr-2
                inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
                active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                wire:click="store"
                >
                    Save
            </button>
            <button
                type="button"
                class=" mr-2
                inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
                active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                wire:click="resetFields"
                >
                    Cancel
            </button>
            @break

        @case('UPDATE')
            <button
                type="button"
                class=" mr-2
                inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
                active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                wire:click="update"
                >
                    Save
            </button>
            <button
                type="button"
                class=" mr-2
                inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
                active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                wire:click="destroy"
                >
                    Delete
            </button>
            <button
                type="button"
                class=" mr-2
                inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
                active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                wire:click="new"
                >
                    New
            </button>
            @break

        @case('DELETE')

            @break
		@case('NEW')
			<button
                type="button"
                class=" mr-2
                inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
                active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                wire:click="store"
                >
                    Save
            </button>
            <button
                type="button"
                class=" mr-2
                inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
                active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                wire:click="resetFields"
                >
                    Cancel
            </button>
			@break
        @default
            Default case...
    @endswitch






</div>


