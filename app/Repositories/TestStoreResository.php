<?php

namespace App\Repositories;

use App\Models\Answer;
use App\Models\Group;
use App\Models\Question;
use App\Repositories\CoreRepository;
use App\Models\Test as Model;
use Illuminate\Support\Facades\Validator;

/**
 * Class TestStoreResository.
 */
class TestStoreResository extends CoreRepository
{

    /**
     * @return string
     *  Return the model
     */
    public function getModelClass()
    {
        return Model::class;
    }


    public function validate_main_data($request) {
        return $data_test = Validator::make($request->all(), [
            'name_test' => 'required|string|min:3|max:122',
            'time' => 'required|integer|min:60|max:3600',
            'desc' => 'required|string|min:2|max:500'
        ]);
    }


    public function store_test($request){

        $array_test = [
            'title' => $request->input('name_test'),
            'desc' => $request->input('desc'),
            'timer' => $request->input('time')
        ];

        return $this->startConditions()->create($array_test);
    }

    public function store_question($request,$qustion,$answers,$new_test,$answer_id_foreach){
        $array_question_test = [
            'title' => $qustion,
            'test_id' => $new_test->id
        ];

        $question_item = Question::create($array_question_test);
        $answers_id = array_intersect_key($answers, array_flip(preg_grep("/^answer[0-9]{1,}$answer_id_foreach$/", array_keys($request->all()))));

        return [
          'answers_id' => $answers_id,
          'question_item' => $question_item
        ];
    }


    public function store_option_answer($answers_id,$answer_options,$answer){
        foreach (array_intersect_key($answers_id, $answer_options) as $opt){
            if ($opt == $answer){
                $quest_opt = 1;
            } else{
                $quest_opt = 0;
            }
        }
        return $quest_opt;
    }

    public function store_answer($answer,$question_id,$quest_opt,$test_id){
        $array_answer_test = [
            'title' => $answer,
            'question_id' => $question_id,
            'question_option' => $quest_opt,
            'test_id' => $test_id
        ];
        Answer::create($array_answer_test);
    }

}
