@extends('layouts.backend')

@section('title', 'Editing '.$config->title)

@section('content')
<div class="ibox float-e-margins">
    <div class="ibox-title">
    <div class=" col-md-6 col-md-offset-3">
    {!! Form::model($config, [
        'method' => $config->exists ? 'put' : 'post',
        'route' => $config->exists ? ['backend.config.update', $config->id] : ['backend.config.store']
    ]) !!}
    
    <div class="form-group">
        {!! Form::label('page_title') !!}
        {!! Form::text('pageTitle', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('footer_content') !!}
        {!! Form::text('footerContent', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address') !!}
        {!! Form::text('address', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone') !!}
        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('fax') !!}
        {!! Form::text('fax', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('map') !!}
        {!! Form::text('map', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit($config->exists ? 'Save Config' : 'Create New Page', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
    </div>
    <div class="clearfix"></div>
    </div>
</div>
    <script>
        new SimpleMDE().render();
    </script>

@endsection
