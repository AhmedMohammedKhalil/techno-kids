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
        <label>العمر</label>
        <select wire:model='age' id="age" class="form-control">
            <option value="0">اختر عمرك</option>
            <option value="5" @if($age==5) selected @endif>5 سنين</option>
            <option value="6" @if($age==6) selected @endif>6 سنين</option>
            <option value="7" @if($age==7) selected @endif>7 سنين</option>
            <option value="8" @if($age==8) selected @endif>8 سنين</option>
        </select>
        @error('age') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label>النوع</label>
        <select wire:model='gender' id="gender" class="form-control">
            <option value="0">اختر النوع</option>
            <option value="1" @if($gender==1) selected @endif>ذكر</option>
            <option value="2" @if($gender==2) selected @endif>انثى</option>
        </select>
        @error('gender') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label>الصورة</label>
        <input type="file" wire:model='image_url' id="image_url" class="form-control">
        @error('image_url') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <button type="submit">حفظ التغييرات</button>
</form>
