<?php

namespace App\Http\Livewire\Pages\LeaveType;
use App\Http\Traits\GlobalTrait;

use Livewire\Component;
use App\Models\LeaveType;

class Form extends Component
{
	use GlobalTrait;
	public $leave_type_id;
	public $leave_type_code;
    public $leave_type_desc;
    
	public $MODE = 'ADD';

	protected $listeners = ['editLeaveType' => 'edit'];

	protected $rules = [
        'leave_type_code' => 'required|min:3',
        'leave_type_desc' => 'required|min:10',
    ];

    public function render()
    {
        return view('livewire.pages.leave-type.form', [
			'MODE' => $this->MODE,
			'leave_type_id' => $this->leave_type_id
		]);
    }

	public function customMessage() {
		$this->addError('leave_type_code', 'testing');
	}

	public function resetFields() {
		$this->leave_type_id = null;
		$this->leave_type_code = null;
		$this->leave_type_desc = null;
	}

	public function setMode($mode) {
		$this->MODE = $mode;

		if($this->MODE == 'NEW') $this->resetFields();
	}

	public function edit($id) {

		$result = LeaveType::find($id);
		$this->MODE = 'EDIT';
		$this->leave_type_id = $result->leave_type_id;
		$this->leave_type_code = $result->leave_type_code;
		$this->leave_type_desc = $result->leave_type_desc;

	} 

	public function update() {
		$this->validate();

		$model = LeaveType::find($this->leave_type_id);
		$model->leave_type_code = $this->leave_type_code;
		$model->leave_type_desc = $this->leave_type_desc;
		$model->save();

		session()->flash('message', 'Leave type successfully updated.');
		$this->resetFields();
		$this->emit(event: 'refreshLeaveTypesTable');
	}

	public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.
        $result = LeaveType::create([
            'leave_type_code' => $this->leave_type_code,
            'leave_type_desc' => $this->leave_type_desc,
        ]);

		session()->flash('message', 'Leave type successfully added.');
		$this->resetFields();
		$this->emit(event: 'refreshLeaveTypesTable');

    }

}
