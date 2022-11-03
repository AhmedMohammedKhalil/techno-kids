<?php

namespace App\Http\Livewire\Kid;

use App\Models\Kid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password, $confirm_password, $age, $gender;


    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
        'email'   => 'required|email|unique:kids,email',
        'password' => ['required', 'string', 'min:8'],
        'confirm_password' => ['required', 'string', 'min:8','same:password'],
        'age' => ['required','gt:0'],
        'gender' => ['required','gt:0'],


    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا الإيميل غير صحيح',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'unique' => 'هذا الايميل مسجل فى الموقع',
        'same' => 'لابد ان يكون الباسورد متطابق',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
        'age.gt' => 'لابد ان تحدد عمرك',
        'gender.gt' => 'لابد ان تحدد النوع'


    ];


    public function register(){
        $validatedData = $this->validate();

        $data = array_merge(
            $validatedData,
            ['password' => Hash::make($this->password), 'gender' => $this->gender == 1 ? 'ذكر' : 'انثى']
        );
        Kid::create($data);
        return redirect()->route('kid.login');
    }

    public function render()
    {
        return view('livewire.kid.register');
    }
}
