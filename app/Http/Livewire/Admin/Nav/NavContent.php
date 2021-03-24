<?php

namespace App\Http\Livewire\Admin\Nav;

use Livewire\Component;

class NavContent extends Component
{
    public $title;
    public function render()
    {
        return view('livewire.admin.nav.nav-content');
    }
}
