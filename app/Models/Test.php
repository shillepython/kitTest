<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'image',
        'timer'
    ];
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function answer()
    {
        return $this->hasMany(Answer::class);
    }

    public function user()
    {
        return $this->hasMany(Mark::class)->where('user_id', Auth::user()->getAuthIdentifier());
    }

    public function mark()
    {
        return $this->hasMany(Mark::class);
    }

    public function group_tests()
    {
        return $this->hasMany(GroupTests::class);
    }

    public function group()
    {
        return $this->hasMany(GroupId::class);
    }
}
