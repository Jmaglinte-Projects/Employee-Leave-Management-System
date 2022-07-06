<div class="actions">
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    <?php switch($type):
        case ('CREATE'): ?>
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
            <?php break; ?>

        <?php case ('UPDATE'): ?>
            <button
                type="button"
                class=" mr-2
                inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
                active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                wire:click="update"
                >
<<<<<<< HEAD
				Save
=======
                    Save
>>>>>>> f8dabf0138f06acc6f6c775aae34aaf5dee07cd4
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
            <?php break; ?>

        <?php case ('DELETE'): ?>

            <?php break; ?>
		<?php case ('NEW'): ?>
			<button
                type="button"
                class=" mr-2
                inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
                active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                wire:click="store"
                >
<<<<<<< HEAD
				Save
=======
                    Save
>>>>>>> f8dabf0138f06acc6f6c775aae34aaf5dee07cd4
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
			<?php break; ?>
        <?php default: ?>
            Default case...
    <?php endswitch; ?>






</div>


<?php /**PATH C:\Users\j.maglinte\Desktop\Repositories\GITHUB\Employee-Leave-Management-System\resources\views/components/form/action.blade.php ENDPATH**/ ?>