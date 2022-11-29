<?php

namespace App\Http\Livewire\Admin\Video;

use App\Models\Topic;
use App\Models\Video;
use Livewire\Component;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $title,$description,$video_id,$topic_id,$video_url,$topics;

    public function mount($video_id) {
        $this->video_id = $video_id;
        $video = Video::whereId($this->video_id)->first();
        $this->title = $video->title;
        $this->topic_id = $video->topic_id;
        $this->description = $video->description;
    }

    protected $rules = [
        'title'   => 'required|string',
        'description'   => 'required|max:255',
        'topic_id'   => 'required|gt:0',
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'image' => 'لابد ان يكون المف صورة',
        'mimes' => 'لابد ان يكون الفيديو mp4,mkv,flv',
        'video_url.max' => 'يجب ان تكون الصورة اصغر من 15 ميجا',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
        'gt' => 'لابد ان تحدد الموضوع'
    ];

    public function fileComplete() {
        $this->validate([
            'video_url' => 'mimes:mp4,mkv,flv|max:15360'
        ]);
    }

    public function edit(){
        $validatedata = $this->validate();
        if($this->video_url) {
            $videoName=str_replace([' ','#','&','=','?'],'-',$this->video_url->getClientOriginalName());
            Video::whereId($this->video_id)->update(array_merge($validatedata,['video_url' => $videoName]));
            $dir = public_path('videos/'.$this->video_id);
            if(file_exists($dir))
                File::deleteDirectory($dir);
            else
                mkdir($dir);
            $this->video_url->storeAs('videos/'.$this->video_id,$videoName);
            File::deleteDirectory(public_path('livewire-tmp'));
        } else {
            Video::whereId($this->video_id)->update($validatedata);
        }

        session()->flash('message', "Video Updated Successfully.");
        return redirect()->route('admin.video.index');

    }
    public function render()
    {
        $this->topics = Topic::all();
        return view('livewire.admin.video.edit');
    }
}
