<form wire:submit.prevent='login'>

    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="form-group">
        <label>الإيميل</label>
        <input type="email" wire:model.lazy='email' id="email" class="form-control" placeholder="إكتب بريدك الالكترونى">
        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label>كلمة السر</label>
        <input type="password" wire:model.lazy='password' id="password" class="form-control"
            placeholder="إكتب كلمة السر">
        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    <button type="submit">تسجيل دخول</button>
</form>
