
<p class="box__title">ایجاد نقش کاربری جدید</p>
<form action="{{ route('role-permissions.store') }}" method="post" class="padding-30">
    @csrf
    <input type="text" name="name" required placeholder="عنوان" class="text" value="{{ old('name') }}">
    @error("name")
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <p class="box__title margin-bottom-15">انتخاب مجوزها</p>

    @foreach ($permissions as $permission)
        <label class="ui-checkbox">
            <input type="checkbox" name="permissions[{{ $permission->name }}]" class="sub-checkbox" 
                data-id="1" value="true"
                @if ( is_array(old('permissions')) && array_key_exists($permission->name, old('permissions')) )
                    checked
                @endif
            >
            <span class="checkmark"></span>
            @lang($permission->name)
        </label>
    @endforeach

    @error("permissions")
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <hr>
    <button class="btn btn-brand" style="margin-top: 10px;">اضافه کردن</button>
</form>