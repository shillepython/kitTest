<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;

class Card extends Component
{

    public $test;

    public function render()
    {
        return view('livewire.test.card');
    }
}
