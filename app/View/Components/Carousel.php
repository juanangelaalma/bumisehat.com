<?php

namespace App\View\Components;

use App\Models\ShortContent;
use Illuminate\View\Component;

class Carousel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $shorts = ShortContent::latest()->get();
        return view('components.carousel', compact('shorts'));
    }
}
