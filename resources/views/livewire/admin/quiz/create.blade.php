<form wire:submit.prevent='add'>

    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="form-group">
        <label> اسم الاختبار</label>
        <input type="text" wire:model.lazy='title' id="title" class="form-control"
            placeholder="إكتب اسم الاختبار ">
        @error('title')
            <span class="text-danger error">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>  رأس السؤال</label>
        <input type="text" wire:model.lazy='subtitle' id="subtitle" class="form-control"
            placeholder="إكتب رأس الأسئلة ">
        @error('subtitle')
            <span class="text-danger error">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>إسم الموضوع</label>
        <select wire:model='topic_id' id="topic_id" class="form-control">
            <option value="0">اختر الموضوع</option>
            @foreach ($topics as $topic)
                <option value="{{ $topic->id }}">{{ $topic->title }}</option>
            @endforeach
        </select>
        @error('topic_id')
            <span class="text-danger error">{{ $message }}</span>
        @enderror
    </div> 
    <div class="form-group">
        <label>  درجة السؤال</label>
        <input type="number" min="1" wire:model.lazy='question_point' id="question_point" class="form-control"
            placeholder="  ادخل درجة السؤال ">
        @error('title')
            <span class="text-danger error">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label> نوع الاسئلة</label>
        <select wire:model='type' id="type" class="form-control">
            <option value="0">اختر الموضوع</option>
                <option value="photo">صورة</option>
                <option value="text">نص</option>
        </select>
        @error('type')
            <span class="text-danger error">{{ $message }}</span>
        @enderror
    </div> 
    <div class="form-group">
        <label>وصف الاختبار</label>
        <textarea name="description" id="description" wire:model.lazy='description' rows="5" style="width:100%"></textarea>
        @error('description')
            <span class="text-danger error">{{ $message }}</span>
        @enderror
    </div>


    <button type="submit">إضافة</button>
</form>
