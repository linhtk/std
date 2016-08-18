@extends('layouts.backend')

@section('title', $page->exists ? 'Editing '.$page->title : 'Create Menus')

@section('content')
    {!! Form::model($page, [
        'method' => $page->exists ? 'put' : 'post',
        'route' => $page->exists ? ['backend.pages.update', $page->id] : ['backend.pages.store']
    ]) !!}
    
    <div class="form-group">
        {!! Form::label('title_en') !!}
        {!! Form::text('title_en', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('title_vn') !!}
        {!! Form::text('title_vn', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('title_jp') !!}
        {!! Form::text('title_jp', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group row">
        <div class="col-md-12">
            {!! Form::label('order') !!}
        </div>
        <div class="col-md-2">
            {!! Form::select('order', [
                '' => '',
                'before' => 'Before',
                'after' => 'After',
                'childOf' => 'Child Of'
            ], null, ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-5">
            {!! Form::select('orderPage', [
                '' => ''
            ] + $orderPages->lists('title_en', 'id')->toArray(), null, ['class' => 'form-control']) !!}
        </div>
    </div>

    {!! Form::submit($page->exists ? 'Save Page' : 'Create New Page', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

    <script>
        new SimpleMDE().render();
    </script>
@endsection
