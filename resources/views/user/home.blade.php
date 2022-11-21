@extends('layout.main')
@section('body')
<!-- @include('layout.header') -->
@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
@endif
<div class="container mt-5">
    <row>
        <div class="col-md-6 home-started">
            <h1>From the edge</h1>
            <h1 class="mb-5">Reach around the globe.</h1>
            <a href="#" class="btn1" style="text-decoration:none;">Explore</a>
            <a href="#" class="btn2" style="text-decoration:none;">Get Started</a>
        </div>
        <div class="col-md-6"></div>
    </row>
</div>
@endsection()