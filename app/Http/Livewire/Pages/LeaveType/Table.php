<?php

namespace App\Http\Livewire\Pages\LeaveType;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\LeaveType;


class Table extends Component
{
	use WithPagination;
	protected $listeners = ['refreshLeaveTypesTable' => '$refresh'];

    public function render()
    {
        return view('livewire.pages.leave-type.table', [
			'leaveTypes' => LeaveType::paginate(10)
		]);
    }

	public function edit($id) {
		$this->emit('editLeaveType', $id);
	}

	public function destroy($id) {
		LeaveType::destroy($id);
		$this->emit(event: 'refreshDepartmentsTable');
	}
}
