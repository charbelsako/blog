@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
@section('bodyContent')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="row">
            <div class="input-field col s12">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', '', ['class' => 'validate', 'pattern' => '[A-Za-z0-9 ]+']) }}
                <span class="helper-text" data-error="wrong" data-success="right">Validation text</span>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <span>Body</span>
                {{ Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => '', 'data-length' => 100]) }}
            </div>
        </div>
        {{Form::submit('Submit', ['class' => 'btn'])}}
    {!! Form::close() !!}
@endsection