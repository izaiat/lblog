<div class='form-group'>
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
    {!! Form::label('blog_content', 'Post content:') !!}
    {!! Form::textArea('blog_content', null, ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-lg btn-success form-control']) !!}
</div>
