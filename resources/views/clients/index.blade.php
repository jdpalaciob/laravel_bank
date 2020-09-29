@extends('layouts.app')

@section('title')
    <title>LB-Clients</title>
@endsection

@section('content')
    <div class="content">

        <div class="title m-d-md">
            LB Clients
        </div>
        
        <div class="links">
            <a href="{{route('clients.create')}}">Subscribe New Client</a>
        </div>
        <br />
        <table class="table table-striped">
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
                            <form action="{{route('clients.destroy', $client)}}" method="POST">
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