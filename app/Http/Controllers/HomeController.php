<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $topics= Topic::all();
        $videos= Video::inRandomOrder()->limit(10)->get();

        return view('home',compact('topics','videos'));
    }

    public function showTopic(Request $r)
    {
        $topic= Topic::whereId($r->id)->first();
        $page_name = $topic->title;
        $videos = $topic->videos;
        return view('topic_details',compact('topic','page_name','videos'));
    }

    public function showVideo(Request $r)
    {
        $video= Video::whereId($r->id)->first();
        $page_name = $video->title;
        return view('video_details',compact('video','page_name'));
    }

    public function showVideos()
    {
        $videos= Video::all();
        $page_name = 'الفيديوهات';
        return view('videos',compact('videos','page_name'));
    }
}
