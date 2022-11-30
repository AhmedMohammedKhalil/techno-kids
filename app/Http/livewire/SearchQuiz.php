<?php

namespace App\Http\Livewire;

use App\Models\Quiz;
use Livewire\Component;

class SearchQuiz extends Component
{
    public $search = '',$quizzes;
    public function render()
    {
        if($this->search == '') {
            $this->quizzes = Quiz::all();
        }
        return view('livewire.search-quiz');
    }
}
