<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Password extends Component
{
	public $wireModel;
	public $disabled;
	public $class;
	public $autofocus;

    /**
     * Create a new component instance.
     *
     * @return void
     */
	// 
    public function __construct($wireModel, $class = null, $disabled = false, $autofocus = false)
    {
        $this->wireModel = $wireModel;
        $this->class = $class;
        $this->disabled = $disabled;
        $this->autofocus = $autofocus === 'true' ? true: false;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.password');
    }
}
