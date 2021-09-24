@extends('User::Front.master')

@section('content')
<div class="form">
    <a class="account-logo" href="/">
        <img src="/img/weblogo.png" alt="">
    </a>
    <div class="form-content form-account">
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                یک لینک تایید ایمیل جدید به ایمیلتان ارسال شد !
            </div>
        @endif

        <p class="center">قبل از ادامه لطفا ایمیلتان را بررسی کنید !</p>
        <p class="center">اگر ایمیلی دریافت نکرده اید درخواست ارسال دوباره ی لینک بدهید .</p>
        <form class="d-inline center" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">ارسال دوباره ی لینک تایید</button>
            <a href="/">بازگشت به صفحه ی اصلی</a>
        </form>
    </div>
</div>
@endsection
