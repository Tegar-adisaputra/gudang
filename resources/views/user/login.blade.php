@extends('layout.main')
@section('body')
<div class="text-center login-box">
    <h1 class="font1">Login</h1>
    <form action="">
        <div class="login-form text-center">
            <input type="text" class="form-login mt-2 mb-3" placeholder="enter your username">
        </div>
        <div class="login-form text-center">
            <input type="password" class="form-login mt-2 mb-3" placeholder="enter your password">
        </div>
        <button class="btn-login">Login</button>
    </form>
</div>

@endsection()