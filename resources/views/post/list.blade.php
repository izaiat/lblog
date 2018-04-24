@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="">
                <a class="btn btn-default" href="posts/create" role="button">Add post</a>
            </div>
        </div>
        <div class="row">
            <table class="table table-hover">
                <thead>
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
                        <td scope="col"><b>{{ ++$i }}</b></td>
                        <td scope="col">{{ $post->title }}</td>
                        <td scope="col">{{ $post->content }}</td>
                        <td scope="col">{{ $post->created_at }}</td>
                        <td scope="col">{{ $post->updated_at }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
