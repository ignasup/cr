@extends('welcome')

@section('content')
    <div class="mt-5 row">
        <div class="col-lg-12">
            <p class="h2">Create voting poll</p>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Poll title</th>
            <th>About the poll</th>
            <th width="300px">Actions</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->about }}</td>
            <td>
            <a href="/posts/{{$post->id}}" class="btn btn-info">Show</a>
            </td>
        </tr>
            
        @endforeach
    </table>
    {{$posts->links()}}

@endsection