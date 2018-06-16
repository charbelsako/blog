@extends('layouts.app')
@section('bodyContent')
    <h1>Create Post</h1>
    <form class="col s12" method="POST" action="/posts/store">
        @csrf
        @method('put')
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
@endsection
