<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupCreateRequest;
use App\Http\Requests\GroupUpdateRequest;
use App\Models\Group;
use App\Models\GroupId;
use App\Repositories\Group\GroupResository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GroupRess extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.home-group');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.home-group-create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeNewGroup(GroupCreateRequest $request) {

        if(!$request->validated()){
            return redirect()->back()->with('fail', 'Ошибка! Настройки группы не были изменены.');
        }
        GroupId::create($request->all());
        return redirect()->back()->with('success', 'Настройки группы были обновлены.');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param GroupResository $resository
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request, GroupResository $resository) {

        $group = explode(',', $request['group']);
        $arr_group = $resository->store_group_for_user($group);

        if(!empty($group) && !empty($arr_group)){
            return $resository->store_group_for_user_InsertData($arr_group);
        }else {
            return redirect('ru/user/profile')->with('fail', 'Ошибка! Заявка не отправлена.');
        }

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd(__METHOD__);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param  string  $lang
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($lang, $id)
    {
        $group = GroupId::find($id);
        return view('admin.home-group-edit', compact('group'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param string $lang
     * @param GroupUpdateRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */

    public function update($lang, GroupUpdateRequest $request, $id)
    {
        $data = [
            'name' => $request->input('name'),
            'desc' => $request->input('description')
        ];
        if(!$request->validated()){
            return redirect()->back()->with('fail', 'Ошибка! Настройки группы не были изменены.');
        }
        GroupId::find($id)->update($data);
        return redirect()->back()->with('success', 'Настройки группы были обновлены.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd(__METHOD__);
    }
}
