@extends('layouts.app')

@section('content')
<div class="container">
    
    <h2 class="subtitle">SESSION STATUS</h2> 
    
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

    <h1> {{Auth::user()->name}} is logged in! <h1>
    
</div>
@endsection
