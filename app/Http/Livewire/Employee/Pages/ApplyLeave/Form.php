<?php

namespace App\Http\Livewire\Employee\Pages\ApplyLeave;
use App\Http\Traits\GlobalTrait;

use Livewire\Component;
use App\Models\LeaveType;
use Illuminate\Support\Facades\Auth;

class Form extends Component
{
	use GlobalTrait;
<<<<<<< HEAD
	
	protected $rules = [
		'leave_from' => 'required',
		'leave_to' => 'required',
		'leave_leave_type_id' => 'required',
		'leave_reason' => 'nullable',
		'leave_user_id' => 'required',
	];
=======

    protected $rules = [
        'leave_id' => 'nullable',
        'leave_user_id' => 'required',
        'leave_from' => 'required',
        'leave_to'=> 'required',
        'leave_leave_type_id'=> 'required',
        'leave_reason'=> 'nullable',
    ];

    protected $listeners = ['edit' => 'edit'];
>>>>>>> f8dabf0138f06acc6f6c775aae34aaf5dee07cd4

	public function __construct() {
        $this->model = 'App\Models\Leave';
        $this->leaveTypes = LeaveType::all();

<<<<<<< HEAD
		$this->leave_from = null;
		$this->leave_to = null;
		$this->leave_leave_type_id = null;
		$this->leave_reason = null;
		$this->leave_user_id = Auth::user()->id;
=======
        $this->leave_user_id = Auth::user()->id;
        $this->leave_id = null;
        $this->leave_from = null;
        $this->leave_to = null;
        $this->leave_leave_type_id = null;
        $this->leave_reason = null;
>>>>>>> f8dabf0138f06acc6f6c775aae34aaf5dee07cd4
    }

    public function render()
    {
        return view('livewire.employee.pages.apply-leave.form');
    }

<<<<<<< HEAD
	public function store()
=======
    /*
    ** Copy This part
    */

    public function store()
>>>>>>> f8dabf0138f06acc6f6c775aae34aaf5dee07cd4
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.
        $data = $this->rules;
<<<<<<< HEAD
		
=======
>>>>>>> f8dabf0138f06acc6f6c775aae34aaf5dee07cd4
        foreach($this->rules as $key => $value) {
            $data[$key] = $this->$key;
        }
        $result = $this->model::create($data);
<<<<<<< HEAD
		session()->flash('message', 'Leave successfully applied.');
		$this->resetFields();
    }
=======

        if($result) {
            session()->flash('message', 'Leave successfully applied.');
		    $this->resetFields();
        }
    }

>>>>>>> f8dabf0138f06acc6f6c775aae34aaf5dee07cd4
}
