<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class NavbarUser extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $active = NULL;
    public function __construct($active = "")
    {
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $user = Auth::user();
        return view('components.navbar-user', [
            'user' => $user
        ]);
    }
}
