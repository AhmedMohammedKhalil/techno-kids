<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = Topic::all();
        $page_name = 'لوحة تحكم المواضيع';

        return view('admins.topics.index',compact('page_name','topics'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'إضافة موضوع جديد';
        return view('admins.topics.create',compact('page_name'));
    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $r)
    {
        $topic = Topic::whereId($r->id)->first();
        $page_name = 'تعديل الموضوع';
        return view('admins.topics.edit',compact('topic','page_name'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $r)
    {
        Topic::destroy($r->id);
        return redirect()->route('admin.topic.index');
    }
}
