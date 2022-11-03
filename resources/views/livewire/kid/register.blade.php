<form wire:submit.prevent='register'>

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
            <option value="5">5 سنين</option>
            <option value="6">6 سنين</option>
            <option value="7">7 سنين</option>
            <option value="8">8 سنين</option>
        </select>
        @error('age') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label>النوع</label>
        <select wire:model='gender' id="gender" class="form-control">
            <option value="0">اختر النوع</option>
            <option value="1">ذكر</option>
            <option value="2">انثى</option>
        </select>
        @error('gender') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label>كلمة السر</label>
        <input type="password" wire:model.lazy='password' id="password" class="form-control"
            placeholder="إكتب كلمة السر">
        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label>أعد كلمة السر</label>
        <input type="password" wire:model.lazy='confirm_password' id="confirm_password" class="form-control"
            placeholder="أعد كتابة كلمة السر">
        @error('confirm_password') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>


    <button type="submit">إنشاء حساب</button>
</form>
