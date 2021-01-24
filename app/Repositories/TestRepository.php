<?php

namespace App\Repositories;

use App\Models\Answer;
use App\Models\Test as Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class TestRepository.
 */
class TestRepository extends CoreRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function getModelClass()
    {
        return Model::class;
    }

    public function storeMarks($request)
    {
        $marks = [];
        $data = $request->input();
        array_shift($data);


        foreach ($data as $item){
            $answer = Answer::find($item);
            if ($answer['question_option'] == 1){
                $marks[] = $answer;
            }
        }

        $mark = round(12 / count($data) * count($marks));

        return [$answer,$mark];
    }

    public function insertMarks($data)
    {
        return DB::table('marks')->insert([
            'test_id' => $data[0]['test_id'],
            'user_id' => Auth::user()->getAuthIdentifier(),
            'mark' => $data[1]
        ]);


    }



}
