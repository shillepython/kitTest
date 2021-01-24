<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function questionTo() {
        return $this->belongsTo(Question::class);
    }
}
