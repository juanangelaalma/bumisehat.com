<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DropdownMenuChild extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $label = "";
    public $href = "";
    public function __construct($label, $href)
    {
        $this->label = $label;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dropdown-menu-child');
    }
}
