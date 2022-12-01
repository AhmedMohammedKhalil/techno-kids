<?php

namespace App\Http\Controllers;


use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
            $quiz = Quiz::whereId($r->id)->first();
            $page_name = 'عرض الأسئلة';
            return view('admins.questions.index', compact('quiz', 'page_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $r)
    { 
        $quiz=Quiz::where('id',$r->id)->first();
        $page_name = 'إضافة سؤال جديد';
        return view('admins.questions.create',compact('page_name','quiz'));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
