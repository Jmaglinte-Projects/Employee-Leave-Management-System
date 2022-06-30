<?php

namespace App\Http\Livewire\Admin\Pages\LeaveType;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\LeaveType;


class Table extends Component
{
	use WithPagination;
	protected $listeners = ['refreshLeaveTypesTable' => '$refresh'];

    public function render()
    {
        return view('livewire.admin.pages.leave-type.table', [
			'leaveTypes' => LeaveType::paginate(5)
		]);
    }

	public function edit($id) {
		$this->emit('edit', $id);
	}

	public function destroy($id) {
		LeaveType::destroy($id);
		$this->emit(event: 'refreshLeaveTypesTable');
	}
}
