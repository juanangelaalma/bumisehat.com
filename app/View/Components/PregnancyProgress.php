<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PregnancyProgress extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    public int $age = 0;
    public function __construct($age)
    {
        $this->age = intval($age);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pregnancy-progress');
    }
}
