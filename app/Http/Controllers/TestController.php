<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestCreateRequest;
use App\Models\Answer;
use App\Models\Mark;
use App\Models\Test;
use App\Models\Question;

use App\Models\User;
use App\Repositories\AnswerRepository;
use App\Repositories\TestRepository;
use App\Repositories\TestStoreResository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\DocBlock\Tags\Method;


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

        return view('test', compact('testsCard'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return void
     */
    public function create()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store_test(Request $request, TestStoreResository $resository){

        $data_test = $resository->validate_main_data($request);
        if ($data_test->fails()) {
            return redirect()->back()->with('fail', 'Данные теста заполнены не правильно, или пусты!');
        }

        //Получение всех данных с полей, фильтрация данных на переменные.
        $qustions = array_intersect_key($request->all(), array_flip(preg_grep("/^question[0-9]{1,}$/", array_keys($request->all()))));
        $answers = array_intersect_key($request->all(), array_flip(preg_grep("/^answer[0-9]{1,}$/", array_keys($request->all()))));
        $radion_answer = array_intersect_key($request->all(), array_flip(preg_grep("/^radio-answer[0-9]{1,}$/", array_keys($request->all()))));
        $answer_options = array_intersect_key($answers, array_flip($radion_answer));
        if (empty($qustions) || empty($answers) || empty($radion_answer) || empty($answer_options)){
            return redirect()->back()->with('fail', 'Поля теста заполнены не правильно, или пусты!');
        }

        $data_forms = [
            'qustions' => $qustions,
            'answers' => $answers,
            'radion_answer' => $radion_answer,
            'answer_options' => $answer_options
        ];

        foreach ($data_forms as $data_form){
            foreach ($data_form as $key => $value){
                $validate_data_test = Validator::make($request->all(), [
                    $key => 'required|min:2|max:255',
                ]);
                if ($validate_data_test->fails()) {
                    return redirect()->back()->with('fail', 'Поля теста заполнены не правильно, или пусты!');
                }
            }
        }

        //Создание данных теста(название, описание, время).
        $new_test = $resository->store_test($request);

        $answer_id_foreach = 1;

        //Переборка всех вопросов для добавления к новому тесту.
        foreach ($qustions as $qustion){

            //Создание вопроса.
            $data_question = $resository->store_question($request,$qustion,$answers,$new_test,$answer_id_foreach);

            //Переборка всех ответов которые пренадлежат к только что созданому вопросу.
            foreach ($data_question['answers_id'] as $answer){

                //Определение, является ли ответ правильным.
                $quest_opt = $resository->store_option_answer($data_question['answers_id'], $answer_options, $answer);

                //Создание ответа.
                $resository->store_answer($answer,$data_question['question_item']->id,$quest_opt,$new_test->id);
            }

            //Обновление счётчика для ответов и их id.
            $answer_id_foreach++;
        }

        return redirect('ru/test')->with('success', 'Тест успешно создан. Найти его можно на стринице "Тесты".');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store( Request $request, TestRepository $testRepository, AnswerRepository $answerRepository)
    {
        if (count($request->all()) <= 2){
            return redirect('ru/test')->with('fail', 'Ошибка! тест не засчитан.');
        }

        $data = $testRepository->getMark($request, $answerRepository);

        $result = $testRepository->insertMarks($data);
        if($result){
            return redirect('ru/test')->with('success', 'Тест успешно сдан! Оценку пройденного теста вы можете узнать у себя в профиле.');
        }else {
            return redirect('ru/test')->with('fail', 'Ошибка! тест не засчитан.');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Test $test
     * @param TestRepository $testRepository
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($lanh, Test $test, TestRepository $testRepository)
    {

        $i = 0;
        $name = 0;


        $testQues = $testRepository->getTestId($test);
        $testCollect = $testRepository->getTest($test);

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
        dd($test);
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
