<?php

namespace App\Http\Livewire\Employee\Pages\MyLeaves;
use App\Http\Traits\GlobalTrait;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Table extends Component
{
	use GlobalTrait;

	// protected $listeners = ['refreshEmployeesTable' => '$refresh'];

	public function __construct() {
        $this->model = 'App\Models\Leave';
		$this->leaves = $this->model::from('vw_leaves')->where('leave_user_id', Auth::user()->id)
		->orderBy('leave_type_code')
		->paginate(5);
    }

    public function render()
    {
        return view('livewire.employee.pages.my-leaves.table', 
		[
			'leaves' => $this->model::all()
		]);
    }

	public function edit($id) {
		$this->emit('edit', $id);
	}

	public function destroy($id) {
		// Employee::destroy($id);
		// $this->emit(event: 'refreshDepartmentsTable');
	}
}
