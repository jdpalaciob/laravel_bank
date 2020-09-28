@extends('layouts.app')

@section('title')
    <title>{{$client->username}}</title>
@endsection

@section('content')
    <div class="container">
        <dl>
            @foreach ($client->getAttributes() as $field => $row)
                <dt>{{ $field }}</dt>
                <dd>{{ $row }}</dd>
            @endforeach
        </dl>
    </div>
@endsection