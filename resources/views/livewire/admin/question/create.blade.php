<form wire:submit.prevent='add'>

    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if ($quiz->type == 'photo')
     <div class="form-group">
        <label>السؤال</label>
        <input type="file" wire:model='image_url' id="image_url" >
        @error('image_url') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    @else
    <div class="form-group">
        <label>  السؤال</label>
        <input type="text" wire:model.lazy='question' id="question" class="form-control"
            placeholder="إكتب السؤال">
        @error('question')
            <span class="text-danger error">{{ $message }}</span>
        @enderror
    </div>
    
    @endif
    
    <div class="form-group">
        <label>  الإجابة</label>
        <input type="text" wire:model.lazy='answer' id="answer" class="form-control"
            placeholder="إكتب الإجابة">
        @error('answer')
            <span class="text-danger error">{{ $message }}</span>
        @enderror
    </div>
    
   

    <button type="submit">إضافة</button>
</form>
