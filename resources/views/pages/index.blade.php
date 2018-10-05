@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the index page</p>
        <p>
            <a class="btn btn-primary btn-lg" href="/login" role="button">Log in</a>
            <a class="btn btn-success btn-lg" href="/register" role="register">Register</a>
        </p>
    </div>
@endsection
