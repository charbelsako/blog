@extends('layouts.app')

@section('bodyContent')
<div class="container">
   
    <h1>Your Posts</h1>
    <div class="row">
            <a href="/posts/create" class="btn yellow">Create Post</a>
    </div>
    @if (count($posts) > 0)
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Body</th>
                    <th></th>
                </tr>
            </thead>
        
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td><a href="/posts/{{$post->id}}/edit" class="btn blue">Edit</a></td>
                        <td>
                            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'right-align']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}     
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>You have no posts.</p>
    @endif
        
</div>
@endsection
