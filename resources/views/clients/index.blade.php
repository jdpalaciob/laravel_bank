@extends('layouts.app')

@section('title')
    <title>LB-Clients</title>
@endsection

@section('content')
    <div class="container">

        <ul class="in-header">
            <li><a class="laravel" href="{{url('/')}}">&laquo; Back</a></li>
            <li><a class="laravel" href="{{route('clients.create')}}">Subscribe New Client &raquo;</a></li>
        </ul>
        <br>

        <h1 class="main-title">LB Clients</h1>
        <br />

        <table class="main-table">
            <thead>
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
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <th scope="row">{{$client->id}}</th>
                        <td>{{$client->first_name}}</td>
                        <td>{{$client->last_name}}</td>
                        <td>{{$client->phone_number}}</td>
                        <td>{{$client->email}}</td>
                        <td>{{$client->username}}</td>
                        <td>
                            <a href="{{ route('clients.show', $client)}}">View</a>
                        </td>
                        <td>
                            <a href="{{ route('clients.edit', $client)}}">Edit</a>
                        </td>
                        <td>
                            <a href="#" onclick="event.preventDefault();
                                                    document.getElementById({{$client->id}}).submit();">Delete</a>

                            <form action="{{route('clients.destroy', $client)}}" id="{{$client->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
            
        </table>
    </div>
@endsection