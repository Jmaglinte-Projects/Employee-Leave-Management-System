<?php

namespace App\Http\Livewire\Employee\Pages\ApplyLeave;
use App\Http\Traits\GlobalTrait;

use Livewire\Component;
use App\Models\LeaveType;
use Illuminate\Support\Facades\Auth;

class Form extends Component
{
	use GlobalTrait;

    protected $rules = [
        'leave_id' => 'nullable',
        'leave_user_id' => 'required',
        'leave_from' => 'required',
        'leave_to'=> 'required',
        'leave_leave_type_id'=> 'required',
        'leave_reason'=> 'nullable',
    ];

    protected $listeners = ['edit' => 'edit'];

	public function __construct() {
        $this->model = 'App\Models\Leave';
        $this->leaveTypes = LeaveType::all();

        $this->leave_user_id = Auth::user()->id;
        $this->leave_id = null;
        $this->leave_from = null;
        $this->leave_to = null;
        $this->leave_leave_type_id = null;
        $this->leave_reason = null;
    }

    public function render()
    {
        return view('livewire.employee.pages.apply-leave.form');
    }

    /*
    ** Copy This part
    */

    public function store()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.
        $data = $this->rules;
        foreach($this->rules as $key => $value) {
            $data[$key] = $this->$key;
        }
        $result = $this->model::create($data);

        if($result) {
            session()->flash('message', 'Leave successfully applied.');
		    $this->resetFields();
        }
    }

}
