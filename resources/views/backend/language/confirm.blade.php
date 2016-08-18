@extends('layouts.backend')

@section('title', 'Delete '.$language->title)

@section('content')
    {!! Form::open(['method' => 'delete', 'route' => ['backend.language.destroy', $post->id]]) !!}
        <div class="alert alert-danger">
            <strong>Warning!</strong> You are about to delete a language. This action cannot be undone. Are you sure you want to continue?
        </div>

        {!! Form::submit('Yes, delete this language!', ['class' => 'btn btn-danger']) !!}

        <a href="{{ route('backend.blog.index') }}" class="btn btn-success">
            <strong>No, get me out of here!</strong>
        </a>
    {!! Form::close() !!}
@endsection
