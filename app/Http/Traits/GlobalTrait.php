<?php

namespace App\Http\Traits;

trait GlobalTrait {
    public $model;

	protected $messages = [
		'required' => 'This field is required.'
	];

    public $TYPE = 'CREATE';

    public function resetFields() {
        $this->resetErrorBag();
		foreach($this->rules as $key => $value) {
            $this->$key = null;
        }
	}

	public function new() {
        $this->resetErrorBag();
		foreach($this->rules as $key => $value) {
            $this->$key = null;
        }
	}

}
