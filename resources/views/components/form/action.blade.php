<div class="actions">
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
	{{ $TYPE }}
    @switch($TYPE)
        @case('CREATE')
            <button
                type="button"
                class=" mr-2
                inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
                active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                wire:click="store"
                >
                    Create
            </button>
            <button
                type="button"
                class=" mr-2
                inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
                active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                wire:click="cancel"
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
                    Update
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
                wire:click="cancel"
                >
                    Cancel
            </button>
            @break

        @case('DELETE')

            @break
        @default
            Default case...
    @endswitch






</div>


