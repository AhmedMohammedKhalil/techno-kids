<form wire:submit.prevent='edit'>

    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <div class="form-group">
        <label>الإسم</label>
        <input type="text" wire:model.lazy='name' id="name" class="form-control" placeholder="إكتب اسمك">
        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label>الإيميل</label>
        <input type="email" wire:model.lazy='email' id="email" class="form-control" placeholder="إكتب بريدك الالكترونى">
        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label>الصورة</label>
        <input type="file" wire:model='image_url' id="image_url" class="form-control">
        @error('image_url') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <button type="submit">حفظ التغييرات</button>
</form>
