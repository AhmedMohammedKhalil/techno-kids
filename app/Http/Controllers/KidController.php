<?php

namespace App\Http\Controllers;

use App\Models\Kid;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KidController extends Controller
{
   public function showLoginForm() {
        return view('kids.login');
    }


    public function showRegisterForm() {
        return view('kids.register');
    }


    public function profile() {
        return view('kids.profile',['page_name' => 'البروفايل']);
    }

    public function settings() {
        return view('kids.settings',['page_name' => 'الإعدادات']);
    }

    public function changePassword() {
        return view('kids.changePassword',['page_name' => 'تعديل كلمة السر']);
    }

    public function result(Request $r) {
        $kid = Kid::whereId(auth('kid')->user()->id)->first();
        $oldScore = 0;
        $points = 0;
        if(count($kid->quizzes) > 0) {
            foreach($kid->quizzes as $q) {
                if($q->id == $r->id) {
                    $oldScore = $q->tests->score;
                    if($oldScore < $r->score || ($oldScore == 0  && $r->score == 0)) {
                        $kid->quizzes()->detach($r->id);
                    }
                }
            }
        }

        if($oldScore < $r->score || ($oldScore == 0  && $r->score == 0)) {
            if($kid->points > 0) {
                $points = $kid->points - $oldScore;
            }
            $kid->quizzes()->attach($r->id,['score'=>$r->score]);
            $points += $r->score;
            $level = Level::where([
                ['range_start','<=',$points],
                ['range_end','>',$points]
            ])->first();
            if(!$level) {
                $level = Level::where('range_end',200)->first();
            }
            Kid::whereId(auth('kid')->user()->id)->update(['points'=>$points,'level_id' => $level->id]);
        }

        return redirect()->route('kid.tests');

    }

    public function showTests() {
        return view('kids.tests',['page_name' => 'الاختبارات']);
    }

    public function logout(Request $request) {
        Auth::guard('kid')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }
}
