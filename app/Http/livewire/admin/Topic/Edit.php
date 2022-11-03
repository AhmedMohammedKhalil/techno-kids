<?php

namespace App\Http\Livewire\Admin\Topic;

use App\Models\Topic;
use Livewire\Component;

class Edit extends Component
{
    public $title,$topic;

    public function mount($topic_id) {
        $this->topic = Topic::whereId($topic_id)->first();
        $this->title = $this->topic->title;
    }

    protected $rules = [
        'title'   => 'required|string'
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
    ];

    public function edit(){
        $validatedData = $this->validate();
        Topic::whereId($this->topic->id)->update($validatedData);
        return redirect()->route('admin.topic.index');

    }
    public function render()
    {
        return view('livewire.admin.topic.edit');
    }
}
