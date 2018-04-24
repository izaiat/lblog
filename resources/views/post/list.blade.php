@extends('layout')

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
            </tr>
        </thead>
        @foreach ($posts as $i => $post)
            <tr>
                <td scope="row">{{ $i }}</td>
                <td scope="col">{{ $post->title }}</td>
                <td scope="col">{{ $post->content }}</td>
                <td scope="col">{{ $post->created_at }}</td>
                <td scope="col">{{ $post->updated_at }}</td>
            </tr>
        @endforeach
    </table>
@endsection
