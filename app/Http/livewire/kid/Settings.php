<?php

namespace App\Http\Livewire\Kid;

use App\Models\Kid;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Settings extends Component
{
    use WithFileUploads;
    public $name='', $email='', $image_url, $age=0,$kid_id='',$gender;


    public function mount() {
        $this->kid_id = Auth::guard('kid')->user()->id;
        $this->name = Auth::guard('kid')->user()->name;
        $this->email = Auth::guard('kid')->user()->email;
        $this->age = Auth::guard('kid')->user()->age;
        $this->gender = Auth::guard('kid')->user()->gender == 'ذكر' ? 1 : 2;

    }

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا الإيميل غير صحيح',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'unique' => 'هذا الايميل مسجل فى الموقع',
        'same' => 'لابد ان يكون الباسورد متطابق',
        'image' => 'لابد ان يكون المف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
        'age.gt' => 'لابد ان تحدد عمرك',
        'gender.gt' => 'لابد ان تحدد نوعك'
    ];


    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
        'age' => ['required', 'gt:0'],
        'gender' => ['required', 'gt:0']

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
                [ 'email'   => ['required','email',"unique:kids,email,".$this->kid_id],
        ]));
        $data =  array_merge(
            $validatedata,
            ['gender' => $this->gender == 1 ? 'ذكر' : 'انثى']
        );
        if(!$this->image_url)
            Kid::whereId($this->kid_id)->update($data);
        if($this->image_url) {
            $photoname = $this->image_url->getClientOriginalName();
            Kid::whereId($this->kid_id)->update(array_merge($data,['image_url' => $photoname]));
            $dir = public_path('img/kids/'.$this->kid_id);
            if(file_exists($dir))
                File::deleteDirectories($dir);
            else
                mkdir($dir);
            $this->image_url->storeAs('img/kids/'.$this->kid_id,$photoname);
            File::deleteDirectory(public_path('livewire-tmp'));
        }
        session()->flash('message', "Your Profile Updated.");
        return redirect()->route('kid.profile');
    }

    public function render()
    {
        return view('livewire.kid.settings');
    }
}
