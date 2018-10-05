@extends('layouts.app')

@section('content')
    <h1>Post</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Wtitten on {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts were found</p>
    @endif
@endsection
