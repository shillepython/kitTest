<?php

namespace App\Repositories\Group;

use App\Models\Group;
use App\Repositories\CoreRepository;
use App\Models\GroupId as Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class GroupResository.
 */
class GroupResository extends CoreRepository
{

    /**
     * @return string
     *  Return the model
     */
    public function getModelClass()
    {
        return Model::class;
    }


    public function store_group_for_user($group){
        $arr_group_user = [];
        foreach (Group::all()->where('user_id', Auth::user()->getAuthIdentifier()) as $group_item){
            $arr_group_user[] = $group_item->group_id;
        }
        $arr_group_diff = array_diff($group, $arr_group_user);
        return $arr_group = array_values($arr_group_diff);
    }


    public function store_group_for_user_InsertData($arr_group){
        for ($i = 0; $i < count($arr_group); $i++) {
            Group::create([
                'group_id' => $arr_group[$i],
                'user_id' => Auth::user()->getAuthIdentifier(),
            ]);
        }
        return redirect('ru/user/profile')->with('success', 'Заявка приянта, ожидайте одобрения от администратора.');
    }

}
