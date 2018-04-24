@extends('layout')

@section('content')
    <div class="container">
        <div class="row`">
            <h4 class="col-lg-12">Add post</h4>
            <div class="col-lg-6">
                {!! Form::open(['action' => 'PostController@store']) !!}
                @include('form', ['submitButtonText' => 'Submit'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
