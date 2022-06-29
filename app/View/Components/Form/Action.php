<?php

namespace App\View\Components\Form;
use App\Http\Traits\GlobalTrait;

use Illuminate\View\Component;

class Action extends Component
{
    use GlobalTrait;
	
	public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'CREATE')
    {
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.action');
    }
}
