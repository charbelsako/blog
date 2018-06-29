@extends('layouts.app')
@section('bodyContent')
    <h1>Posts</h1>
    <ul class="collection">
        @if (count($posts) > 0)
            @foreach ($posts as $p)
                <li class="collection-item avatar">
                    <a href="#!"> <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle"> </a>
                    <a href="/posts/{{$p->id}}"><span class="title"> {{ $p->title }} </span> </a>
                    <p class="truncate">{!! $p->body !!}</p>
                    <small>Written On: {{$p->created_at}}  by <strong>{{$p->user->name}} </strong></small>
                    <a href="#!" class="secondary-content"><i class="material-icons">star_border</i></a>
                </li>
            @endforeach
            
        @else
            <h3>No posts found.</h3>
        @endif
    </ul>
    {{$posts->links()}}
@endsection
