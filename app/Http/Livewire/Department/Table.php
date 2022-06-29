<?php

namespace App\Http\Livewire\Department;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Department;


class Table extends Component
{
	use WithPagination;
	protected $listeners = ['refreshDepartmentsTable' => '$refresh'];

    public function render()
    {
        return view('livewire.department.table', [
			'departments' => Department::paginate(10)
		]);
    }

	public function edit($id) {
		$this->emit('editDepartment', $id);
	}

	public function destroy($id) {
		Department::destroy($id);
		$this->emit(event: 'refreshDepartmentsTable');
	}
}
