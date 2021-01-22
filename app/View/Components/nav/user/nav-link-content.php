<?php

namespace App\View\Components\nav\user;

use Illuminate\View\Component;

class nav-link-content extends Component
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
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.nav.user.nav-link-content');
    }
}
