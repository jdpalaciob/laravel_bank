@extends('layouts.app')

@section('title')
    <title>{{$info['Username']}} Account</title>
@endsection

@section('content')
    <div class="content">
        @foreach ($info as $field => $row)
            <dl>
                <dt>{{ strtoupper($field) }}</dt>
                <dd>{{ $row }}</dd>
            </dl>
        @endforeach
    </div>
@endsection