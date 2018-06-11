@extends('layouts.app')
    
@section('bodyContent')
    <h1>Services Page</h1>
    <ul>
        @if(count($services) > 0)
            @foreach($services as $s)
                <li>{{ $s }} </li>
            @endforeach
        @endif
    </ul>
@endsection

