@extends('layouts.app')

@section('bodyContent')
    <br>
    <a href="/posts" class="btn-small waves-effect waves-light">
        <i class="material-icons">arrow_back</i>
    </a>
    <div style="grey">
        <h2>
            {{$post->title}}
        </h2>
        <p>
            {{-- the {!! are for parsing html !!} --}}
            {!! $post->body !!}
        </p>    
        <hr>
        <small>
            Written on: {{$post->created_at}}
        </small>
        <hr>
        <a href="/posts/{{$post->id}}/edit" class="btn"> Edit </a>
    </div>
@endsection