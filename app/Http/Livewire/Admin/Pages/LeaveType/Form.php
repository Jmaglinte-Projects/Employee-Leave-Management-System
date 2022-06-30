<?php

namespace App\Http\Livewire\Admin\Pages\LeaveType;
use App\Http\Traits\GlobalTrait;

use Livewire\Component;
use App\Models\LeaveType;

class Form extends Component
{
	use GlobalTrait;

	public $leave_type_id;
	public $leave_type_code;
    public $leave_type_desc;

	protected $listeners = ['edit' => 'edit'];

	protected $rules = [
        'leave_type_id' => 'nullable',
        'leave_type_code' => 'required|min:3',
        'leave_type_desc' => 'required|min:10',
    ];

	public function __construct()
    {
        $this->model = 'App\Models\LeaveType';
    }

    public function render()
    {
        return view('livewire.admin.pages.leave-type.form');
    }

	public function store()
    {
        $this->validate();
        // Execution doesn't reach here if validation fails.
        $data = $this->rules;
        foreach($this->rules as $key => $value) {
            $data[$key] = $this->$key;
        }

        $result = $this->model::create($data);
		session()->flash('message', 'Leave type successfully added.');
		$this->resetFields();
		$this->emit(event: 'refreshLeaveTypesTable');

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

	public function edit($id) {
		$this->resetErrorBag();
		$result = LeaveType::find($id);
		$this->TYPE = 'UPDATE';
        foreach($this->rules as $key => $value) {
            $this->$key = $result->$key;
        }

	} 

}
