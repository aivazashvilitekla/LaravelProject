@extends('FrontEnd.master')
@section('title')
    Sign In
@endsection
@section('content')
    <!-- sign up-page -->
    <div class="login-page about">
        <img class="login-w3img" src="{{asset('/')}}frontendSourceFile/images/img3.jpg" alt="">
        <div class="container">
            <h3 class="w3ls-title w3ls-title1">Sign In to your account</h3>
            <center><strong class="text-center" style="color: red">{{Session::get('sms')}}</strong></center>
            <div class="login-agileinfo">
                <form action="{{route('check_login')}}" method="post">
                    @csrf
                    <input class="agile-ltext" type="email" name="email" placeholder="Email" required="">
                    <input class="agile-ltext" type="password" name="password" placeholder="Password" required="">

                    <input type="submit" value="Login">
                </form>
            </div>
        </div>
    </div>
    <!-- //sign up-page -->
@endsection
