<!DOCTYPE html>
<html lang="en">
@include('Dashboard::layouts.head')
<body>
@include('Dashboard::layouts.sidebar')
<div class="content">
    <div class="header d-flex item-center bg-white width-100 border-bottom padding-12-30">
        <div class="header__right d-flex flex-grow-1 item-center">
            <span class="bars"></span>
            <a class="header__logo" href=""></a>
        </div>
        @include('Dashboard::layouts.header')
    </div>
    @include('Dashboard::layouts.breadcrumb')
    <div class="main-content">
        @yield('content')
    </div>
</div>
</body>
@include('Dashboard::layouts.foot')
</html>