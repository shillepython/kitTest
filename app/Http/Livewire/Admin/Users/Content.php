<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Content extends Component
{
    public function render()
    {
        $arr_group = [];
        foreach (\App\Models\Group::all()->where('user_id', Auth::user()->getAuthIdentifier()) as $group) {
            if (!$group->verified == false) {

                $arr_group[] = $group->group->name;
            }
        }
        if (empty($arr_group)){
            $arr_group = ["Нет гурпп"];
        }
        $users = User::all();
        return view('livewire.admin.users.content', compact('users', 'arr_group'));
    }
}
