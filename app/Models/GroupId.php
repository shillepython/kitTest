<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class GroupId extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'desc',
      'image'
    ];

    public function group()
    {
        return $this->hasMany(Group::class)->where('id', Auth::user()->getAuthIdentifier());
    }

    public function group_tests($id)
    {
        return $this->hasMany(GroupTests::class)->where('id', $id);
    }
}
