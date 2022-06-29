<?php

namespace App\Http\Livewire\Pages\Employee;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Employee;


class Table extends Component
{
	use WithPagination;
	protected $listeners = ['refreshEmployeesTable' => '$refresh'];

    public function render()
    {
        return view('livewire.pages.employee.table', [
			'employees' => Employee::select()->where('user_role', 'employee')
			->leftJoin('departments', 'user_dep_id', '=', 'dep_id')
			->paginate(10)
		]);
    }

	public function edit($id) {
		$this->emit('edit', $id);
	}

	public function destroy($id) {
		Employee::destroy($id);
		$this->emit(event: 'refreshDepartmentsTable');
	}
}
