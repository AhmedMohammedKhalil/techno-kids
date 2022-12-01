<form wire:submit.prevent='edit'>

    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="form-group">
        <label>السؤال</label>
        @if ($quiz->type == 'text')
            <input type="text" wire:model.lazy='question' id="question" class="form-control" placeholder="إكتب السؤال">
            @error('questiom')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        @else
            <input type="file" wire:model='image_url' id="image_url" class="form-control">
            @error('image_url')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        @endif

    </div>

    <div class="form-group">
        <label>الإجابة</label>
        <input type="text" wire:model.lazy='answer' id="answer" class="form-control" placeholder="إكتب الإجابة">
        @error('answer')
            <span class="text-danger error">{{ $message }}</span>
        @enderror
    </div>


    <button type="submit">حفظ التغييرات</button>
</form>
