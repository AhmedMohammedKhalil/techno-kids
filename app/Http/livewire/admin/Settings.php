<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Settings extends Component
{
    use WithFileUploads;
    public $name='', $email='', $image_url,$admin_id='';


    public function mount() {
        $this->admin_id = Auth::guard('admin')->user()->id;
        $this->name = Auth::guard('admin')->user()->name;
        $this->email = Auth::guard('admin')->user()->email;
    }

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا الإيميل غير صحيح',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'unique' => 'هذا الايميل مسجل فى الموقع',
        'image' => 'لابد ان يكون المف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا'
    ];

    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
    ];

    public function updatedImageUrl()
    {
            $validatedata = $this->validate(
                ['image_url' => ['image','mimes:jpeg,jpg,png','max:2048']]
            );
    }

    public function edit() {
        $validatedata = $this->validate(
            array_merge(
                $this->rules,
                [ 'email'   => ['required','email',"unique:admins,email,".$this->admin_id],
        ]));
        if(!$this->image_url)
            Admin::whereId($this->admin_id)->update($validatedata);
        if($this->image_url) {
            $photoname = $this->image_url->getClientOriginalName();
            Admin::whereId($this->admin_id)->update(array_merge($validatedata,['image_url' => $photoname]));
            $dir = public_path('img/admins/'.$this->admin_id);
            if(file_exists($dir))
                File::deleteDirectories($dir);
            else
                mkdir($dir);
            $this->image_url->storeAs('img/admins/'.$this->admin_id,$photoname);
            File::deleteDirectory(public_path('livewire-tmp'));
        }
        session()->flash('message', "Your Profile Updated.");
        return redirect()->route('admin.profile');
    }

    public function render()
    {
        return view('livewire.admin.settings');
    }
}
