<?php

namespace App\Http\Livewire\Department;

use Livewire\Component;
use App\Models\Department;

class Form extends Component
{
	public $dep_id;
	public $dep_code;
    public $dep_name;
    
	public $MODE = 'ADD';

	protected $listeners = ['editDepartment' => 'edit'];

    public function render()
    {
        return view('livewire.department.form', [
			'MODE' => $this->MODE,
			'dep_id' => $this->dep_id
		]);
    }

	protected $rules = [
        'dep_code' => 'required|min:3',
        'dep_name' => 'required',
    ];

	public function resetFields() {
		$this->dep_id = null;
		$this->dep_code = null;
		$this->dep_name = null;
	}

	public function setMode($mode) {
		$this->MODE = $mode;

		if($this->MODE == 'NEW') $this->resetFields();
	}

	public function edit($id) {

		$result = Department::find($id);
		$this->MODE = 'EDIT';
		$this->dep_id = $result->dep_id;
		$this->dep_code = $result->dep_code;
		$this->dep_name = $result->dep_name;

	} 

	public function update() {
		$this->validate();

		$department = Department::find($this->dep_id);
		$department->dep_code = $this->dep_code;
		$department->dep_name = $this->dep_name;
		$department->save();

		session()->flash('message', 'Department successfully updated.');
		$this->emit(event: 'refreshDepartmentsTable');
	}

	public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.
        $result = Department::create([
            'dep_code' => $this->dep_code,
            'dep_name' => $this->dep_name,
        ]);

		session()->flash('message', 'Department successfully added.');
		$this->resetFields();
		$this->emit(event: 'refreshDepartmentsTable');

    }

}
