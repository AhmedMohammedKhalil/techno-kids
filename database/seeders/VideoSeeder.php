<?php

namespace Database\Seeders;

use App\Models\Topic;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('videos')->insert([
            [
                'title' => 'مكونات الحاسوب',
                'description' => 'مكونات الحاسوب',
                'video_url' => 'مكونات-الحاسوب-1.mp4',
                'topic_id' => Topic::select('*')->inRandomOrder()->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'المكونات الثانوية للحاسوب',
                'description' => 'المكونات الثانوية للحاسوب',
                'video_url' => 'مكونات-الحاسوب-2.mkv',
                'topic_id' => Topic::select('*')->inRandomOrder()->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'المكونات الداخلية للحاسوب',
                'description' => 'المكونات الداخلية للحاسوب',
                'video_url' => 'مكونات-الحاسوب-3.mkv',
                'topic_id' => Topic::select('*')->inRandomOrder()->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'انواع الحاسوب',
                'description' => 'انواع الحاسوب',
                'video_url' => 'انواع-الحواسيب.mkv',
                'topic_id' => Topic::select('*')->inRandomOrder()->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'وحدات الادخال',
                'description' => 'وحدات الادخال',
                'video_url' => 'وحدات-الادخال.mp4',
                'topic_id' => Topic::select('*')->inRandomOrder()->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
