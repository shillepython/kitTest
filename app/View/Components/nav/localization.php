<?php

namespace App\View\Components\nav;

use Illuminate\View\Component;

class localization extends Component
{

    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.nav.localization');
    }
}
