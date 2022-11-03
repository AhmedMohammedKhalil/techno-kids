<?php

namespace App\Http\Livewire\Kid;

use App\Models\Kid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePassword extends Component
{
    public $password='', $confirm_password='',$kid_id='';


    public function mount() {
        $this->kid_id = Auth::guard('kid')->user()->id;
    }


    protected $rules = [

        'password' => ['required', 'string', 'min:8'],
        'confirm_password' => ['required', 'string', 'min:8','same:password'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'same' => 'لابد ان يكون الباسورد متطابق',
    ];

    public function edit() {

        $validatedata = $this->validate();
        $data =['password' => Hash::make($this->password)];

        Kid::whereId($this->kid_id)->update($data);
        session()->flash('message', "Your Profile Updated.");
        return redirect()->route('kid.profile');
    }

    public function render()
    {
        return view('livewire.kid.change-password');
    }
}
