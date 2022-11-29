<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Video;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function index()
    {
        $videos = Video::all();
        $page_name = 'لوحة تحكم الفيديوهات';

        return view('admins.videos.index',compact('page_name','videos'));
    }


    public function create()
    {
         $page_name = 'إضافة فيديو جديد';
        return view('admins.videos.create',compact('page_name'));
    }



    public function show(Request $r)
    {
        $video = Video::whereId($r->id)->first();
        $page_name = 'عرض الفيديو';
        return view('admins.videos.show',compact('page_name','video'));
    }


    public function edit(Request $r)
    {
        $video_id = $r->id;
        $page_name = 'تعديل فيديو جديد';
        return view('admins.videos.edit',compact('page_name','video_id'));
    }




    public function delete(Request $r)
    {
        Video::destroy($r->id);
        File::deleteDirectory(public_path('videos/'.$r->id));
        return redirect()->route('admin.video.index');
    }
}
