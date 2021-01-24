<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;

use App\Models\Test;
use App\Models\Question;
use App\Models\User;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create();
        Test::factory()->count(1)->create();
        Question::factory()->count(12)->create();
        Answer::factory()->count(60)->create();
    }
}
