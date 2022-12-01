<?php

namespace App\Http\Livewire\Admin\Question;

use App\Models\Quiz;
use Illuminate\Support\Facades\File;
use App\Models\Question;
use Livewire\WithFileUploads;


use Livewire\Component;

class Create extends Component
{
    use WithFileUploads;
    public $question,$answer,$image_url,$quiz_id,$quiz;

    public function mount($quiz_id) {
        $this->quiz_id=$quiz_id;
        $this->quiz = Quiz::whereId($quiz_id)->first();
    }

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
    ];

    protected $rules = [
        'answer' => 'required|max:255',
        'quiz_id'=>'required'
    ];
    public function updatedImageUrl()
    {
            $validatedata = $this->validate(
                ['image_url' => ['image','mimes:jpeg,jpg,png','max:2048']]
            );
    }

    public function add(){
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
            $question=Question::create(array_merge($validatedData,['image_url' => $photoname]));
            $dir = public_path('img/questions/'.$question->id);
            if(file_exists($dir))
                File::deleteDirectory($dir);
            else
                mkdir($dir);
            $this->image_url->storeAs('img/questions/'.$question->id,$photoname);
            File::deleteDirectory(public_path('livewire-tmp'));
        }else {
            Question::create($validatedData);
        }
        $this->quiz->points+=$this->quiz->question_point;
        $this->quiz->save();
        return redirect()->route('admin.question.index',['id'=>$this->quiz->id]);
    }

    public function render()
    {
        return view('livewire.admin.question.create');
    }
}
