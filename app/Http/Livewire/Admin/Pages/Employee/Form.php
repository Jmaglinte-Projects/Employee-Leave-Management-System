<?php

namespace App\Http\Livewire\Admin\Pages\Employee;
use App\Http\Traits\GlobalTrait;
use Illuminate\Support\Facades\Hash;

use Livewire\Component;
use App\Models\Employee;
use App\Models\Department;

class Form extends Component
{
	use GlobalTrait;

    public $departments;

	public $id;
	public $name;
	public $user_first_name;
	public $user_last_name;
	public $user_gender;
	public $user_birthdate;
	public $user_dep_id;
	public $user_mobile;
	public $email;
	public $password;

	protected $rules = [
		'id' => 'nullable',
		'name' => 'nullable',
		'user_first_name' => 'required',
		'user_last_name' => 'required',
		'user_gender' => 'required',
		'user_birthdate' => 'required',
		'user_dep_id' => 'required',
		'user_mobile' => 'required',
		'email' => 'unique:users|required|email',
		'password' => 'required|string|min:8|max:255',
	];

	protected $listeners = ['edit' => 'edit'];


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = 'App\Models\Employee';
        $this->departments = Department::all();
    }

    public function render()
    {
        return view('livewire.admin.pages.employee.form');
    }

	public function store()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.
        $this->name = "$this->user_first_name";
        $data = $this->rules;
        foreach($this->rules as $key => $value) {
            $data[$key] = $this->$key;
            if($key == 'user_birthdate') {
                list($year, $month, $day) = explode('/', $this->$key);
                $data[$key] = "$year-$month-$day";
            }
			if($key == 'password') $data[$key] = Hash::make($this->$key);
        }
        $result = $this->model::create($data);
		session()->flash('message', 'User successfully added.');
		$this->resetFields();
		$this->emit(event: 'refreshEmployeesTable');

    }


    public function update() {
        unset($this->rules['id']);
        unset($this->rules['email']);
		$this->validate();

		$result = $this->model::find($this->id);
        if($result) {
            foreach($this->rules as $key => $value) {
                $result->$key = $this->$key;
				if($key == 'password') $result->$key = Hash::make($this->$key);
            }
            $result->save();
        }

		session()->flash('message', 'User successfully updated.');
		$this->emit(event: 'refreshEmployeesTable');
	}

    public function destroy($id) {

    }

	public function edit($id) {
		$this->resetErrorBag();
		$result = Employee::find($id);
		$this->TYPE = 'UPDATE';
        foreach($this->rules as $key => $value) {
            $this->$key = $result->$key;
        }
	}

}
