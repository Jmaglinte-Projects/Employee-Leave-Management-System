<?php

namespace App\Http\Livewire\Employee\Pages\MyLeave;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Leave;

class Table extends Component
{
    public function __construct()
    {
        $this->model = 'App\Models\Leave';
        $this->leaves = $this->model::leftJoin('users', 'leave_user_id', '=', 'users.id')
            ->leftJoin('leave_types', 'leave_leave_type_id', '=', 'leave_type_id')
            ->where('leave_user_id', Auth::user()->id)
            ->orderBy('leave_type_code')->get();
    }

    public function render()
    {
        return view('livewire.employee.pages.my-leave.table');
    }


}
