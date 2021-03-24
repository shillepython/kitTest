<?php

namespace App\Repositories;
use App\Models\Mark as Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class TestRepository.ц
 */
class MarkRepository extends CoreRepository
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

        return $this->startConditions()->all()->where('user_id', Auth::user()->getAuthIdentifier());
    }

}
