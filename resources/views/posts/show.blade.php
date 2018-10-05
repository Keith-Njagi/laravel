@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Back</a>
    <h1>{{$post->title}}</h1>

    <div>
        {{$post->body}}
    </div>
    <hr/>
    <small>Wtitten on {{$post->created_at}}</small>
@endsection
