<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Mark;
use App\Models\Test;
use App\Models\Question;

use App\Models\User;
use App\Repositories\TestRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $testsCard = Test::all()->sortDesc();
        $user = User::all();

        return view('test', compact('testsCard','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request, TestRepository $testRepository)
    {

        $data = $testRepository->storeMarks($request);

        if($testRepository->insertMarks($data)){
            return redirect('test')->with('status', 'Тест успешно сдан! Подробности результата теста, вы можете найти у себя в профиле.');
        }else {
            return redirect('test.index')->with('status', 'Ошибка! тест не сдан.');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Test $test)
    {

        $testCollect = Test::find($test);

        $testByIdCollect = Test::find($test->id);
        $testQues = $testByIdCollect->questions;
        $i = 0;
        $name = 0;

        return view('test.show', compact('testQues', 'testCollect', 'i', 'name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}
