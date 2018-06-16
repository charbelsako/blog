@extends('layouts.app')

@section('bodyContent')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $p)
            <div class="">
                <h3> <a href="/posts/{{$p->id}}">{{$p->title}}</a> </h3>
                <small>Written On: {{$p->created_at}}</small>
            </div>
        @endforeach
    @else
        <h3>No posts found.</h3>
    @endif
@endsection