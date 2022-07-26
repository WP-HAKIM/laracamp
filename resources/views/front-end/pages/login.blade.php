@extends('front-end.layouts.noheaderapp')

@section('title')
    Login |Laravel
@endsection

@section('content')
<section class="login-user">
    <div class="left">
        <img src="/assets/images/ill_login_new.png" alt="">
    </div>
    <div class="right">
        <img src="/assets/images/logo.png" class="logo" alt="">
        <h1 class="header-third">
            Start Today
        </h1>
        <p class="subheader">
            Because tomorrow become never
        </p>
        <p>
            <a class="btn btn-border btn-google-login" href="#">
                <img src="/assets/images/ic_google.svg" class="icon" alt=""> Sign In with Google
            </a>
        </p>
        <img src="/assets/images/people.png" class="people" alt="">
    </div>
</section>
@endsection