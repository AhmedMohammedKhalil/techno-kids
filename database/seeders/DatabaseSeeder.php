<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            AdminSeeder::class,
            LevelSeeder::class,
            TopicSeeder::class,
            VideoSeeder::class,
            QuizSeeder::class,
            QuestionSeeder::class,
        ]);
        \App\Models\Kid::factory(10)->create();
    }
}
