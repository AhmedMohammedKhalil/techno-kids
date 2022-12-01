<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;


class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizzes = Quiz::all();
        $page_name = 'لوحة تحكم الاختبارات';

        return view('admins.quizzes.index',compact('page_name','quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $page_name = 'إضافة اختبار جديد';
        return view('admins.quizzes.create',compact('page_name'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $r)
    {
        $quiz = Quiz::whereId($r->id)->first();
        $page_name = 'تعديل الاختبار';
        return view('admins.quizzes.edit',compact('quiz','page_name'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $r)
    {
        $questions=Question::where('quiz_id',$r->id)->get();
        foreach ($questions as $q) {
            $q->delete();
        }
        Quiz::destroy($r->id);
        return redirect()->route('admin.quiz.index');
    }
}
