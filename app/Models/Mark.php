<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Test;
use Illuminate\Support\Facades\Auth;

class Mark extends Model
{
    use HasFactory;
    protected $fillable = [
        'test_id',
        'user_id',
        'mark'
    ];

    public function test() {
        return $this->belongsTo(Test::class);
    }

}
