<?php

namespace App\Http\Livewire\Admin\Topic;

use App\Models\Topic;
use Livewire\Component;

class Create extends Component
{
    public $title;

    protected $rules = [
        'title'   => 'required|string'
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
    ];

    public function add(){
        $validatedData = $this->validate();
        Topic::create($validatedData);
        return redirect()->route('admin.topic.index');

    }
    public function render()
    {
        return view('livewire.admin.topic.create');
    }
}
