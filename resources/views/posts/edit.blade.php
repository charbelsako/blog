@extends('layouts.app')

@section('bodyContent')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'put']) !!}
        <div class="row">
            <div class="input-field col s12">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', $post->title, ['class' => 'validate', 'pattern' => '[A-Za-z0-9 ]+']) }}
                <span class="helper-text" data-error="wrong" data-success="right">Validation text</span>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <span>Body</span>
                {{ Form::textarea('body', $post->body,  ['id' => 'article-ckeditor', 'class' => '', 'data-length' => 100]) }}
            </div>
        </div>
        {{ Form::submit('Submit', ['class' => 'btn']) }}
    {!! Form::close() !!}

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
@endsection