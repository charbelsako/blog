@extends('layouts.app')
@section('bodyContent')
    <h1>Create Post</h1>
    
{{-- <form class="col s12">
        @method('put')
        @csrf
        <div class="row">
            <div class="input-field col s12">
                <input placeholder="Enter Title" id="title" type="text" class="validate" pattern="[A-Za-z]+" required>
                <label for="title">Title</label>
                <span class="helper-text" data-error="wrong" data-success="right">Validation text</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="bodyText" class="materialize-textarea" data-length="100" required></textarea>
                <label for="bodyText">Body Text</label>
            </div>
        </div>
        <input type="submit" class="btn">
    </form>
@endsection --}}

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