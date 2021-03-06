<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Select extends Component
{
	public $name;
	public $label;
	public $class;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name = null, $label = null, $class = null)
    {
        $this->name = $name;
        $this->label = $label;
		$this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.select');
    }
}
