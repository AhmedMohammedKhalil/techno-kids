<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->insert([
        [
            'title' => 'الاختبار الاول',
            'subtitle' => "ضع الاجابة الصحيحة امام التعريف الخاص بها",
            'description' => "اختيار عن التعاريف الخاصة بالحاسوب",
            'points' => 10,
            'question_point' => 2,
            'type' => "text",
            'topic_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'title' => 'الاختبار الثانى',
            'subtitle' => "ضع الاجابة الصحيحة امام الصورة الخاصة بها",
            'description' => "اختيار عن الصور الخاصة بالحاسوب",
            'points' => 18,
            'question_point' => 3,
            'type' => "photo",
            'topic_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]
        ]);
    }
}
