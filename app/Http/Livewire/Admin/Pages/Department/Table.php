<?php

namespace App\Http\Livewire\Admin\Pages\Department;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Department;


class Table extends Component
{
	use WithPagination;
	protected $listeners = ['table' => '$refresh'];

    public function render()
    {
        return view('livewire.admin.pages.department.table', [
			'departments' => Department::paginate(10)
		]);
    }

	public function edit($id) {
		$this->emit('edit', $id);
	}

	public function destroy($id) {
		Department::destroy($id);
		$this->emit(event: 'table');
	}
}
