<?php

namespace App\Http\Livewire;

use App\Models\Video;
use Livewire\Component;

class SearchVideo extends Component
{
    public $search = '',$videos;
     public function makeSearch() {
        $this->videos = '';
        $this->videos = Video::where('title','like','%'.$this->search.'%')
                            ->orwhere('description','like','%'.$this->search.'%')->get();
    }
    public function render()
    {
        if($this->search == '') {
            $this->videos = Video::all();
        }
        return view('livewire.search-video');
    }
}
