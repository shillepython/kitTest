<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'group_id',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function group()
    {
        return $this->belongsTo(GroupId::class);
    }

}
