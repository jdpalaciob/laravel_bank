@extends('layouts.app')

@section('title')
    <title>LB-Accounts</title>
@endsection

@section('content')
    <div class="content">

        <div class="title m-d-md">
            Accounts
        </div>

        <div class="links">
            <a href="{{route('accounts.create')}}">Creates New Account</a>
        </div>
        <br />
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Acc_ID</th>
                    <th scope="col">Number</th>
                    <th scope="col">Type</th>
                    <th scope="col">Created</th>
                    <th scope="col">Active</th>
                    <th scope="col">Owner</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($accounts as $account)
                    <tr>
                        <th scope="row">{{$account->id}}</th>
                        <td>{{$account->account_number}}</td>
                        <td>{{$account->account_type->account_type}}</td>
                        <td>{{$account->created}}</td>
                        <td>{{ ($account->active == 1) ? 'YES' : 'NO'}}</td>
                        <td>{{$account->client->username}}</td>
                        <td>
                            <a href="{{route('accounts.show', $account)}}">View</a>
                        </td>
                        <td>
                            <a href="{{route('accounts.edit', $account)}}">Edit</a>
                        </td>
                        <td>
                            <form action="{{route('accounts.destroy', $account)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-secondary btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
            
        </table>
    </div>
@endsection