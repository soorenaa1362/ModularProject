@extends('User::Front.master')

@section('content')
    <form action="{{ route('password.update') }}" method="post" class="form">
        <a class="account-logo" href="index.html">
            <img src="/img/weblogo.png" alt="">
        </a>
        <div class="form-content form-account">
            @csrf 

            <input type="hidden" name="token" value="{{ $token }}">

            <input id="email" type="email" class="txt txt-l @error('email') is-invalid @enderror" placeholder="ایمیل *"
                name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input id="password" type="password" class="txt txt-l @error('password') is-invalid @enderror"
                placeholder="رمز عبور جدید *"
                name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input id="password-confirm" type="password" class="txt txt-l @error('password') is-invalid @enderror"
                placeholder="تایید رمز عبور جدید *"
                name="password_confirmation" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <span class="rules">
                رمز عبور باید حداقل ۶ کاراکتر و ترکیبی از حروف بزرگ، حروف کوچک، اعداد و کاراکترهای غیر الفبا مانند !@#$%^&*() باشد.
            </span>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <br> 

            <button class="btn continue-btn">بروز رسانی رمز عبور</button>
        </div>
    </form>
@endsection

