@extends('layouts.backend')

@section('title', $language->exists ? 'Editing '.$language->name : 'Create New Language')

@section('content')
    {!! Form::model($language, [
        'method' => $language->exists ? 'put' : 'post',
        'route' => $language->exists ? ['backend.language.update', $language->id] : ['backend.language.store']
    ]) !!}

    <div class="form-group">
        {!! Form::label('name') !!}
        {!! Form::text('lang_name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('position') !!}
        {!! Form::text('position', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status') !!}
        {!! Form::checkbox('status', null, ['class' => 'form-control']) !!}
        
    </div>
    {!! Form::hidden('is_default', false) !!}
    <div class="form-group">
        {!! Form::submit($language->exists ? 'Save Language' : 'Create New Language', ['class' => 'btn btn-primary']) !!}
    </div>    

    {!! Form::close() !!}

@endsection
