<form wire:submit.prevent='edit' x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
    x-on:livewire-upload-finish="isUploading = false ,$wire.fileComplete()"
    x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">

    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="form-group">
        <label>إسم الفيديو</label>
        <input type="text" wire:model.lazy='title' id="title" class="form-control" placeholder="إكتب اسم الفيديو"
            value="{{ $title }}">
        @error('title')
            <span class="text-danger error">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>إسم الموضوع</label>
        <select wire:model='topic_id' id="topic_id" class="form-control">
            <option value="0">اختر الموضوع</option>
            @foreach ($topics as $topic)
                <option value="{{ $topic->id }}" @if ($topic->id == $topic_id) selected @endif>
                    {{ $topic->title }}</option>
            @endforeach
        </select>
        @error('topic_id')
            <span class="text-danger error">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <div class="progress" x-show="isUploading">
            <div class="progress-bar" role="progressbar" :style="`width: ${progress}%`"></div>
        </div>
        <div x-show="!isUploading">
            <label>ارفع الفيديو</label>
            <input type="file" wire:model='video_url' id="video_url">
        </div>
        @error('video_url')
            <span class="text-danger error">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>وصف الفيديو</label>
        <textarea name="description" id="description" wire:model.lazy='description' rows="5" style="width:100%">{{ $description }}</textarea>
        @error('description')
            <span class="text-danger error">{{ $message }}</span>
        @enderror
    </div>


    <button type="submit">إضافة</button>
</form>
