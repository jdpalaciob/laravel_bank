@extends('layouts.app')

@section('title')
    <title>Laravel Bank</title>
@endsection

@section('content')

    <div class="content">
        <div class="title m-b-md">
            LARAVEL BANK
        </div>

        <div class="links">
            <a href="{{route('clients.index')}}">Clients</a>
            <a href="{{route('accounts.index')}}">Accounts</a>
        </div>
    </div>

@endsection