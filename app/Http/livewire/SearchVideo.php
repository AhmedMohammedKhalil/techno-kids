<?php

namespace App\Http\Livewire;

use App\Models\Video;
use Livewire\Component;

class SearchVideo extends Component
{
    public $search = '',$videos;
    public function render()
    {
        if($this->search == '') {
            $this->videos = Video::all();
        }
        return view('livewire.search-video');
    }
}
