<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{
	public $name;
	public $label;
	public $class;
	public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
	//
    public function __construct($name, $label = null, $type = 'text', $class = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input');
    }
}
