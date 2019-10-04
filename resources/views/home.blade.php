@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="container" id="app">
    <example-component :user="{{Auth::user()}}"></example-component>
</div>
@endsection
