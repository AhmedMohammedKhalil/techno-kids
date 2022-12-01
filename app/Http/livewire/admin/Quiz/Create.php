<?php

namespace App\Http\Livewire\Admin\Quiz;

use App\Models\Quiz;
use App\Models\Topic;
use Livewire\Component;

class Create extends Component
{
    public $title,$subtitle,$description,$points=0,$topic_id,$topics,$question_point,$type;

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
    public function add(){
        $validatedData = $this->validate();
        $validatedData= array_merge(
            $validatedData,
            [ 
                'points' => $this->points]);
        Quiz::create($validatedData);
        return redirect()->route('admin.quiz.index');
    }

    public function render()
    {
        $this->topics = Topic::all();
        return view('livewire.admin.quiz.create');
    }
}
