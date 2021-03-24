<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupTests extends Model
{
    use HasFactory;


    public function test() {
        return $this->belongsTo(Test::class);
    }

    public function group()
    {
        return $this->belongsTo(GroupId::class);
    }
}
