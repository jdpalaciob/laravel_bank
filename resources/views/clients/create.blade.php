@extends('layouts.app')

@section('title')
    <title>Sign up Client</title>
@endsection

@section('content')

    <div class="container">

        <ul class="in-header">
            <li><a class="laravel" href="{{route('clients.index')}}">&laquo; Back</a></li>
        </ul>
        <br>

        <h1 class="main-title">New Client</h1>
        <br />

        <form action="{{route('clients.store')}}" method="POST" class="main-form">
            @csrf
            <dl>
                <dt>First Name</dt>
                <dd>
                    <input type="text" name="first_name" id="first_name">
                </dd>
            </dl>
            <dl>
                <dt>Last Name</dt>
                <dd>
                    <input type="text" name="last_name" id="last_name">
                </dd>
            </dl>
            <dl>
                <dt>Phone Number</dt>
                <dd>
                    <input type="text" name="phone_number" id="phone_number">
                </dd>
            </dl>
            <dl>
                <dt>Email</dt>
                <dd>
                    <input type="text" name="email" id="email">
                </dd>
            </dl>
            <dl>
                <dt>Username</dt>
                <dd>
                    <input type="text" name="username" id="username">
                </dd>
            </dl>
            <button><b>Submit</b></button>

        </form>
        
    </div>

    
@endsection