@extends('layouts.app')

@section('title')
    <title>LB-Clients</title>
@endsection

@section('content')
    <div class="content">
        <h1>LB Clients</h1>
        <div class="links">
            <a href="">Subscribe New Client</a>
        </div>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">F. Name</th>
                    <th scope="col">L. Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>
            <tbody class="table-striped">
                @foreach ($clients as $client)
                    <tr>
                        <th scope="row">{{$client->id}}</th>
                        <td>{{$client->first_name}}</td>
                        <td>{{$client->last_name}}</td>
                        <td>{{$client->phone_number}}</td>
                        <td>{{$client->email}}</td>
                        <td>{{$client->username}}</td>
                        <td>View</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                @endforeach
            </tbody>
            
            
        </table>
    </div>
@endsection