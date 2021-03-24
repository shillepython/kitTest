<?php

namespace App\Repositories;

use App\Models\Answer;
use App\Models\Mark;
use App\Models\Test as Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function getAllTestAndMarks() {
        $marks = Mark::all()
            ->where('user_id', Auth::user()->getAuthIdentifier())
            ->unique('test_id');

        if (!empty($marks->all())){
            $result = $this->startConditions()->all();

            foreach ($result as $item){
                $idTEst[] = $item->id;
            }

            $arr = $marks
                ->unique('test_id')
                ->toArray();

            foreach ($arr as $itemmarks){

                $arrId[] = $itemmarks['test_id'];
            }

            $resultNoPassed = array_diff($idTEst, $arrId);


            foreach ($resultNoPassed as $itemNoPassed) {
                $dataResultNoPassed[] = $this->startConditions()->all()->where('id', $itemNoPassed);
            }
            if (!empty($dataResultNoPassed)){
                foreach ($dataResultNoPassed as $itemPass){
                    foreach ($itemPass as $itemPassTwo){
                        $noPassedTitle[] = $itemPassTwo->title;
                    }
                }
            }else{
                $dataResultNoPassed = 0;
            }



            foreach ($arrId as $itemArrId) {
                $dataResultTest[] = $this->startConditions()->all()->where('id', $itemArrId);
            }
            return [$dataResultTest, $dataResultNoPassed];
        }else{
            return null;
        }
    }

    public function getAllNoPassedTest($dataId) {
        return $this->startConditions()->all()->where('id', '!=', $dataId);
    }

    public function getMark($request, $answerRepository)
    {

        $marks = [];
        $data = $request->input();
        array_shift($data);

        $dataItem = $answerRepository->getMark($data, $marks);
        $testQuesCount = $dataItem[2];

        $mark = round(12 / count($testQuesCount) * count($dataItem[1]));

        return [$dataItem[0],$mark];
    }

    public function insertMarks($data)
    {
        if (empty($data)){

        }
        return DB::table('marks')->insert([
            'test_id' => $data[0]['test_id'],
            'user_id' => Auth::user()->getAuthIdentifier(),
            'mark' => $data[1],
            'created_at' => now()
        ]);

    }

    public function getTest($test) {
        $testCollect = $this->startConditions()->find($test);

        return $testCollect;
    }

    public function getTestId($test) {
        $testByIdCollect = $this->startConditions()->find($test->id);
        $testQues = $testByIdCollect->questions;

        return $testQues;
    }


}
