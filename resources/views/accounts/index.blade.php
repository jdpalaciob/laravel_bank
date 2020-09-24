@extends('layouts.app')

@section('title')
    <title>LB-Accounts</title>
@endsection

@section('content')
    <div class="content">
        <h1>Accounts</h1>
        <div class="links">
            <a href="">Creates New Account</a>
        </div>

        <table class="table">
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
            <tbody class="table-striped">
                @foreach ($accounts as $account)
                    <tr>
                        <th scope="row">{{$account->id}}</th>
                        <td>{{$account->account_number}}</td>
                        <td>{{$account->account_type}}</td>
                        <td>{{$account->created}}</td>
                        <td>@if ($account->active == 1) YES @else NO @endif</td>
                        <td>{{$account->username}}</td>
                        <td>View</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                @endforeach
            </tbody>
            
            
        </table>
    </div>
@endsection