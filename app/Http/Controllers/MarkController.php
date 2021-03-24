<?php

namespace App\Http\Controllers;

use App\Repositories\MarkRepository;
use App\Repositories\TestRepository;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    public function index(TestRepository $testRepository) {
        $data = $testRepository->getAllTestAndMarks();
        if (empty($data)){
            $noMarks = "Вы не прошли ещё ни один тест!";
            return view('test.mark', compact( 'noMarks'));
        }
        $tests = $data[0];
        if (!$data[1]) {
            $testsNoPassed = null;
        }else{
            $testsNoPassed = $data[1];
        }

        return view('test.mark', compact( 'tests', 'testsNoPassed'));
    }
}
