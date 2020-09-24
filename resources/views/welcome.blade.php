@extends('layouts.app')

@section('title')
    <title>Laravel Bank</title>
@endsection

@section('content')
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
    <div class="title m-b-md">
        LARAVEL BANK
    </div>

    <div class="links">
        <a href="{{route('clients.index')}}">Clients</a>
        <a href="{{route('accounts.index')}}">Accounts</a>
    </div>

@endsection