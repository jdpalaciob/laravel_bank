@extends('layouts.app')

@section('title')
    <title>Laravel Bank</title>
@endsection

@section('content')

    <div class="container">

        <h1 class="main-title">LARAVEL BANK</h1>

        <p class="subtitle">El banco de pruebas para uso de <a class="laravel" href="https://laravel.com/">laravel</a></p>

        <ul class="links">
            <li><a href="{{route('clients.index')}}">Clients</a></li>
            <li><a href="{{route('accounts.index')}}">Accounts</a></li>
        </ul>

    </div>

@endsection