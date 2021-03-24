<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Answer;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'test_id'
    ];

    public function answer()
    {
        return $this->hasMany(Answer::class);
    }
}
