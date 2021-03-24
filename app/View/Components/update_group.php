<?php

namespace App\View\Components;

use App\Models\Group;
use Illuminate\View\Component;

class update_group extends Component
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

//        $group = Group::all()->where('user_id', \Illuminate\Support\Facades\Auth::user()->getAuthIdentifier());
        return view('components.update_group');
    }
}
