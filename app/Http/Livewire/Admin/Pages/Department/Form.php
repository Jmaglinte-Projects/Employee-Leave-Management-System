<?php

namespace App\Http\Livewire\Admin\Pages\Department;
use App\Http\Traits\GlobalTrait;
use Livewire\Component;

class Form extends Component
{
	use GlobalTrait;

	public $dep_id;
	public $dep_code;
    public $dep_name;

	protected $listeners = ['edit' => 'edit'];

	public function __construct(){
        $this->model = 'App\Models\Department';
    }

    public function render()
    {
        return view('livewire.admin.pages.department.form');
    }

	protected $rules = [
        'dep_id' => 'nullable',
        'dep_code' => 'required|min:3',
        'dep_name' => 'required',
    ];

	public function store()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.
        $data = $this->rules;
        foreach($this->rules as $key => $value) {
            $data[$key] = $this->$key;
        }
        $result = $this->model::create($data);
		session()->flash('message', 'Department successfully added.');
		$this->resetFields();
		$this->emit(event: 'table');

    }


    public function update() {
		$this->validate();

		$result = $this->model::find($this->dep_ids);
        if($result) {
            foreach($this->rules as $key => $value) {
                $result->$key = $this->$key;
            }
            $result->save();
        }

		session()->flash('message', 'Department successfully updated.');
		$this->emit(event: 'table');
	}

    public function destroy() {
		$this->model::destroy($this->dep_id);
		$this->resetFields();
		session()->flash('message', 'Department successfully deleted.');
		$this->emit(event: 'table');
    }

	public function edit($id) {
		$this->resetErrorBag();
		$result = $this->model::find($id);
		$this->TYPE = 'UPDATE';
        foreach($this->rules as $key => $value) {
            $this->$key = $result->$key;
        }
	}

}
