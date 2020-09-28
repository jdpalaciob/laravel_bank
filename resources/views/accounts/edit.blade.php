@extends('layouts.app')

@section('title')
    <title>Edit Account {{$account->client->username}}</title>
@endsection

@section('content')

    <div class="container">

        <div class="links">
            <a href="{{route('accounts.index')}}">&laquo; Back</a>
        </div>
        <div class="title m-d-md">
            Opening an Account
        </div>

        <div class="container">
            <form action="{{route('accounts.update', $account)}}" method="POST">
                @csrf
                @method('PUT')
                <dl>
                    <dt>Client Username</dt>
                    <dd>
                        <select name="client_id" id="client_id">
                            @foreach ($usernames as $id => $username)
                                <option value="{{$id}}" {{ ($id===$account->client_id) ? 'selected' : '' }}>{{$username}}</option>
                            @endforeach
                        </select>
                    </dd>
                </dl>
                <dl>
                    <dt>Account Type</dt>
                    <dd>
                        <select name="account_type_id" id="account_type">
                            @foreach ($account_types as $id => $account_type)
                                <option value="{{$id}}" {{($id===$account->account_type_id) ? 'selected' : ''}}>{{$account_type}}</option>
                            @endforeach
                        </select>
                    </dd>
                </dl>
                <dl>
                    <dt>Date</dt>
                    <dd>
                        <input type="date" name="created" value="{{$account->created}}">
                    </dd>
                </dl>
                <dl>
                    <dt>Account Number</dt>
                    <dd>
                        <input type="text" name="account_number" id="account_number" maxlength="10" value="{{$account->account_number}}">
                    </dd>
                </dl>
                <dl>
                    <input type="checkbox" name="active" id="active" value=1 {{($account->active === 1) ? 'checked' : ''}}>
                    <label for="active">Active</label>
                </dl>
                <button><b>Submit</b></button>

            </form>
        </div>
    </div>

    
@endsection