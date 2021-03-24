<?php

namespace App\Repositories;

use App\Models\Answer as Model;
use App\Models\Question;

/**
 * Class AnswerRepository.
 */
class AnswerRepository extends CoreRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function getModelClass()
    {
        return Model::class;
    }

    public function getMark($data, $marks) {

        $idTest = array_shift($data);

        $query = Question::all()->where('test_id', $idTest);

        foreach ($data as $item){

            $answer = $this->startConditions()->find($item);
            if ($answer['question_option'] == 1){
                $marks[] = $answer;
            }
        }

        $dataItem = [$answer, $marks, $query];
        return $dataItem;
    }



}
