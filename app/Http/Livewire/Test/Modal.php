<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;

class Modal extends Component
{

    public $testsCard;

    public function render()
    {
        return view('livewire.test.modal');
    }
}
