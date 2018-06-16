@extends('layouts.app')

@section('bodyContent')
    <h1>Posts</h1>
    <ul class="collection">
        @if (count($posts) > 0)
            @foreach ($posts as $p)
                    <li class="collection-item avatar">
                        <a href="#!"> <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle"> </a>
                        <a href="#!"><span class="title"> {{ $p->title }} </span> </a>
                        <p class="truncate">{{$p->body}}</p>
                        <a href="#!" class="secondary-content"><i class="material-icons">star_border</i></a>
                    </li>
                    {{-- <h3> <a href="/posts/{{$p->id}}">{{$p->title}}</a> </h3>
                    <small>Written On: {{$p->created_at}}</small> --}}
                
            @endforeach
        @else
            <h3>No posts found.</h3>
        @endif
    </ul>
@endsection

{{-- 
    
--}}