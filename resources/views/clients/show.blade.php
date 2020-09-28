@extends('layouts.app')

@section('title')
    <title>{{$client->username}}</title>
@endsection

@section('content')
    <div class="content">
        @foreach ($client->getAttributes() as $field => $row)
            <dl>
                <dt>{{ strtoupper($field) }}</dt>
                <dd>{{ $row }}</dd>
            </dl>
        @endforeach
    </div>
@endsection