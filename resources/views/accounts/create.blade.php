@extends('layouts.app')

@section('title')
    <title>Register Account</title>
@endsection

@section('content')

    <div class="container">

        <div class="links">
            <a href="{{route('clients.index')}}">&laquo; Back</a>
        </div>
        <div class="title m-d-md">
            Opening an Account
        </div>

        <div class="container">
            <form action="{{route('accounts.store')}}" method="POST">
                @csrf
                <dl>
                    <dt>Client Username</dt>
                    <dd>
                        <select name="client_id" id="client_id">
                            @foreach ($usernames as $id => $username)
                                <option value="{{$id}}">{{$username}}</option>
                            @endforeach
                        </select>
                        <input type="text" name="username" id="username">
                    </dd>
                </dl>
                <dl>
                    <dt>Account Type</dt>
                    <dd>
                        <select name="account_type_id" id="account_type">
                            @foreach ($account_types as $id => $account_type)
                                <option value="{{$id}}">{{$account_type}}</option>
                            @endforeach
                        </select>
                    </dd>
                </dl>
                <dl>
                    <dt>Date</dt>
                    <dd>
                        <input type="date" name="created" value="{{date('Y-m-d')}}">
                    </dd>
                </dl>
                <dl>
                    <dt>Account Number</dt>
                    <dd>
                        <input type="text" name="account_number" id="account_number" maxlength="10">
                    </dd>
                </dl>
                <dl>
                    <input type="hidden" name="active" value=1 >
                </dl>
                <button><b>Submit</b></button>

            </form>
        </div>
    </div>

    
@endsection