<?php

namespace App\Http\Controllers;

use App\Models\Kid;
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

    public function logout(Request $request) {
        Auth::guard('kid')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }
}
