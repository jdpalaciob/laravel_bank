@extends('layouts.app')

@section('title')
    <title>{{$info->username}} Account</title>
@endsection

@section('content')
    <div class="content">
        @foreach ($info->getAttributes() as $field => $row)
            <dl>
                <dt>{{ strtoupper($field) }}</dt>
                <dd>{{ $row }}</dd>
            </dl>
        @endforeach
    </div>
@endsection