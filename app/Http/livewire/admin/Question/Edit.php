<?php

namespace App\Http\Livewire\Admin\Question;

use App\Models\Quiz;
use Livewire\Component;
use App\Models\Question;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class Edit extends Component
{
    use WithFileUploads;
    public $questionObject,$answer,$question=null,$image_url=null,$quiz;

    public function mount($id) {
        $this->questionObject = Question::whereId($id)->first();
        $this->quiz = Quiz::whereId($this->questionObject->quiz_id)->first();
        $this->answer = $this->questionObject->answer;
        $this->question = $this->questionObject->question;
        $this->image_url = $this->questionObject->image_url;
        $this->quiz_id = $this->questionObject->quiz_id;
    }

    protected $rules = [
        'answer'   => 'required|max:255',
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
        'image' => 'لابد ان يكون الملف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا'
    ];

     public function updatedImageUrl()
    {
            $validatedData = $this->validate(
                ['image_url' => ['image','mimes:jpeg,jpg,png','max:2048']]
            );
    }
    public function edit(){
        if($this->quiz->type == 'photo') {
            $validatedData = $this->validate(array_merge(
                $this->rules,
                ['image_url'=>'required']
            ));
        } else {
            $validatedData = $this->validate(array_merge(
                $this->rules,
                ['question'=>'required|max:255']
            ));
        }

        if($this->quiz->type == 'photo') {
            $photoname = $this->image_url->getClientOriginalName();
            Question::whereId($this->questionObject->id)->update(array_merge($validatedData,['image_url' => $photoname]));
            $dir = public_path('img/questions/'.$this->questionObject->id);
            if(file_exists($dir))
                File::deleteDirectory($dir);
            else
                mkdir($dir);
            $this->image_url->storeAs('img/questions/'.$this->questionObject->id,$photoname);
            File::deleteDirectory(public_path('livewire-tmp'));
        }else {
            Question::whereId($this->questionObject->id)->update($validatedData);
        }
        return redirect()->route('admin.question.index',['id'=>$this->quiz->id]);
    }
    public function render()
    {
        return view('livewire.admin.question.edit');
    }
}
