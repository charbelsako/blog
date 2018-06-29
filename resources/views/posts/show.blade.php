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
            Written on: {{$post->created_at}} by <strong>{{$post->user->name}}</strong>
        </small>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <div class="row">
                    <div class="col s6">
                        <a href="/posts/{{$post->id}}/edit" class="btn blue"> Edit </a>
                    </div>
                    <div class="">
                        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'right-align']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn red']) !!}
                        {!! Form::close() !!}        
                    </div>
                </div>
            @endif
        @endif
        
    </div>
@endsection