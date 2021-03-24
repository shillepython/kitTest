<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home-admin');
    }
    public function settings(){
        return view('admin.home-settings');
    }
    public function users(){
        return view('admin.home-users');
    }
    public function group(){
        return view('admin.home-group');
    }
    public function createTest()
    {
        $question = 1;
        $answer = 1;

        return view('admin.create-test', compact( 'question', 'answer'));
    }

    protected function sattingsEdit(Request $request) {

        if (!empty($request->input('name'))){
            config(['app.name' => $request->name]);

        }
        return redirect()->back();
    }
}
