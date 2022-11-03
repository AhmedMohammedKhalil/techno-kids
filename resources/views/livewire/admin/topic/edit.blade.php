<form wire:submit.prevent='edit'>

    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="form-group">
        <label>إسم الموضوع</label>
        <input type="text" wire:model.lazy='title' id="title" class="form-control" placeholder="إكتب اسم الموضوع">
        @error('title') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <button type="submit">تعديل</button>
</form>
