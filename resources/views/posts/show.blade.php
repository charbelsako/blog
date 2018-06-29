@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
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
        <div class="row">
            <div class="col s6">
                <a href="/posts/{{$post->id}}/edit" class="btn"> Edit </a>
            </div>
            <div class="col s6">
                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'right-align']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn red ']) !!}
                {!! Form::close() !!}        
            </div>
        </div>

        
    </div>
@endsection