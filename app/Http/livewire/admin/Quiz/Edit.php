<?php

namespace App\Http\Livewire\Admin\Quiz;

use App\Models\Quiz;
use Livewire\Component;
use App\Models\Topic;


class Edit extends Component
{
    public $title,$subtitle,$description,$topic_id,$topics,$question_point,$quiz,$type;

    public function mount($quiz_id) {
        $this->quiz = Quiz::whereId($quiz_id)->first();
        $this->title = $this->quiz->title;
        $this->subtitle = $this->quiz->subtitle;
        $this->description = $this->quiz->description;
        $this->topic_id = $this->quiz->topic_id;
        $this->type = $this->quiz->type;
        $this->question_point = $this->quiz->question_point;
    }

    protected $rules = [
        'title'   => 'required|string',
        'subtitle'   => 'required|string',
        'description'   => 'required|max:255',
        'topic_id'   => 'required|gt:0',
        'question_point' => 'required',
        'type' => 'required'
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
        'gt' => 'لابد ان تحدد الموضوع'
    ];

    public function edit(){
        $validatedData = $this->validate();
        Quiz::whereId($this->quiz->id)->update($validatedData);
        return redirect()->route('admin.quiz.index');
    }
    public function render()
    {
        $this->topics = Topic::all();
        return view('livewire.admin.quiz.edit');
    }
}
