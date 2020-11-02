@extends('welcome')

@section('content')
    <div class="container mt-5">
        <p class="h3">{{$post->name}}</p>
        <small><p class="h5 d-inline">It was created at:</p> {{$post->created_at}}</small>
        <hr>
    </div>
@endsection