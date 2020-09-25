@extends('layouts.app')

@section('title')
    <title>Sign up Client</title>
@endsection

@section('content')

    <div class="container">

        <div class="links">
            <a href="{{route('clients.index')}}">&laquo; Back</a>
        </div>
        <div class="title m-d-md">
            New Client
        </div>

        <div class="container">
            <form action="{{route('clients.store')}}">
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
    </div>

    
@endsection