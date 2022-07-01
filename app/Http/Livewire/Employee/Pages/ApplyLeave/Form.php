<?php

namespace App\Http\Livewire\Employee\Pages\ApplyLeave;
use App\Http\Traits\GlobalTrait;

use Livewire\Component;
use App\Models\LeaveType;

class Form extends Component
{
	use GlobalTrait;
	
	public function __construct() {
        $this->model = 'App\Models\Employee';
        $this->leaveTypes = LeaveType::all();
    }

    public function render()
    {
        return view('livewire.employee.pages.apply-leave.form');
    }
}
