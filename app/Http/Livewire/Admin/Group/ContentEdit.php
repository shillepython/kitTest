<?php

namespace App\Http\Livewire\Admin\Group;

use Livewire\Component;

class ContentEdit extends Component
{

    public $group;

    public function render()
    {
        return view('livewire.admin.group.content-edit');
    }
}
