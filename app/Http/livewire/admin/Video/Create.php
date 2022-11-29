<?php

namespace App\Http\Livewire\Admin\Video;

use App\Models\Topic;
use App\Models\Video;
use Livewire\Component;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title,$description,$topic_id,$video_url,$topics;

    protected $rules = [
        'title'   => 'required|string',
        'description'   => 'required|max:255',
        'topic_id'   => 'required|gt:0',
        'video_url' => 'required'
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'mimes' => 'لابد ان يكون الفيديو mp4,mkv,flv',
        'video_url.max' => 'يجب ان تكون الفيديو اصغر من 40 ميجا',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
        'gt' => 'لابد ان تحدد الموضوع'
    ];

    public function fileComplete() {
        $this->validate([
            'video_url' => 'mimes:mp4,mkv,flv|max:102400'
        ]);
    }

    public function add(){
        $validatedata = $this->validate();
        $videoName=str_replace([' ','#','&','=','?'],'-',$this->video_url->getClientOriginalName());
        $video = Video::create(array_merge($validatedata,['video_url' => $videoName]));
        $dir = public_path('videos/'.$video->id);
        if(file_exists($dir))
            File::deleteDirectories($dir);
        else
            mkdir($dir);
        $this->video_url->storeAs('videos/'.$video->id,$videoName);
        File::deleteDirectory(public_path('livewire-tmp'));
        session()->flash('message', "Video Added Successfully.");
        return redirect()->route('admin.video.index');

    }
    public function render()
    {
        $this->topics = Topic::all();
        return view('livewire.admin.video.create');
    }
}
