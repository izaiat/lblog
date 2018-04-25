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
                    <th class="container">
                        <div class="col-md-1">#</div>
                        <div class="col-md-3">Title</div>
                        <div class="col-md-4">Content</div>
                        <div class="col-md-2">Created at</div>
                        <div class="col-md-2">Updated at</div>
                    </th>
                </tr>
                </thead>
                @foreach ($posts as $i => $post)
                    <tr>
                        <td class="container">
                            <a href="posts/{{$post->id}}" class="row">
                                <div class="col-md-1"><b>{{ ++$i }}</b></div>
                                <div class="col-md-3">{{ $post->title }}</div>
                                <div class="col-md-4">{{ $post->blog_content }}</div>
                                <div class="col-md-2">{{ $post->created_at }}</div>
                                <div class="col-md-2">{{ $post->updated_at }}</div>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
