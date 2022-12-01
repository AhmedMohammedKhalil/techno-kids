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
    public function create()
    {
        //
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


    public function edit(Request $r)
    {
        $id = $r->id;
        $page_name = 'تعديل السؤال';
        return view('admins.questions.edit',compact('page_name','id'));
    }



    public function delete(Request $r)
    {
        $question = Question::whereId($r->id)->first();
        $quiz = Quiz::whereId($question->quiz_id)->first();
        $quiz->points -= $quiz->question_point;
        $quiz->save();
        $question->delete();
        return redirect()->route('admin.question.index',['id'=>$quiz->id]);
    }
}
