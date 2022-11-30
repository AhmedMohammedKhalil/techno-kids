<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('questions')->insert([
        [
            'question' => 'لوحة تحتوي على دوائر كهربائية تمكن جميع مكونات الحاسب الآلي من التواصل مع بعضها',
            'answer' => "اللوحة الام Motherboard",
            'quiz_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'question' => 'معالجة البيانات وتحويلها من الصيغة التي يتعامل معها الحاسب الآلي ومكوناته إلى الشكل الذي يظهر للمستخدم',
            'answer' => "وحدة المعالجة المركزية CPU",
            'quiz_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'question' => 'تخزين البيانات الخاصة بالبرامج والعمليات التي يقوم المستخدم باستخدامها بشكل مستمر،',
            'answer' => "الذاكرة العشوائية RAM",
            'quiz_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'question' => 'معالجة الصور والرسومات لعرضها بشكل سلسل وصريح',
            'answer' => "وحدة معالجة الرسوم ROM",
            'quiz_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'question' => 'يخزن عليها كافة البيانات من صور وملفات ومقاطع فيديو وما إلى ذلك',
            'answer' => "وحدات وأجهزة التخزين Storage Devices",
            'quiz_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]]);
        DB::table('questions')->insert([
        [
            'image_url' => 'screen.jpg',
            'answer' => "شاشة الكمبيوتر",
            'quiz_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'image_url' => 'mouse.jpg',
            'answer' => "الماوس او الفأرة",
            'quiz_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'image_url' => 'keyboard.jpg',
            'answer' => "لوحة المفاتيح او الكيبورد",
            'quiz_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'image_url' => 'cpu.jpg',
            'answer' => "وحدة المعالجة المركزية او الكيسة او cpu",
            'quiz_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'image_url' => 'cd.jpg',
            'answer' => "القرص المضغوط او cd rom",
            'quiz_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'image_url' => 'headphone.jpg',
            'answer' => "السماعات",
            'quiz_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]

    ]);
    }
}
