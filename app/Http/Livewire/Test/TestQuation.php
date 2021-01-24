<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;

class TestQuation extends Component
{

    public $test;
    public $name = 0;
    public $i = 0;

    public function render()
    {
        return view('livewire.test.test-quation');
    }
}
