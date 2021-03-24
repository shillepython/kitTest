<?php

namespace App\Http\Livewire\Admin\Group;

use App\Models\GroupId;
use App\Models\GroupTests;
use App\Models\Test;
use Livewire\Component;

class Content extends Component
{
    public function render()
    {
        $groups = GroupId::all();
        $tests = Test::all();
        $group_for_test = GroupTests::all();
        return view('livewire.admin.group.content', compact('groups','tests', 'group_for_test'));
    }
}
