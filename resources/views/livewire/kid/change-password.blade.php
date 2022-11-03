<form wire:submit.prevent='edit'>

    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="form-group">
        <label>كلمة السر</label>
        <input type="password" wire:model.lazy='password' id="password" class="form-control"
            placeholder="إكتب كلمة السر">
        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label>اعد كلمة السر</label>
        <input type="password" wire:model.lazy='confirm_password' id="confirm_password" class="form-control"
            placeholder="اعد كلمة السر">
        @error('confirm_password') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    <button type="submit">حفظ التغييرات</button>
</form>
