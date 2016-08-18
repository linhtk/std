@extends('layouts.backend')

@section('title', 'Language')

@section('content')
    <a href="{{ route('backend.language.create') }}" class="btn btn-primary">Create New Language</a>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Is Default</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($language as $alanguage)
                <tr>
                    <td>
                        <a href="{{ route('backend.language.edit', $alanguage->id) }}">{{ $alanguage->lang_name }}</a>
                    </td>
                    <td>{{ $alanguage->position }}</td>
                    <td>
                        @if($alanguage->is_default == 1) True 
                        @else False
                        @endif
                    </td>
                    <td>
                        @if($alanguage->status == 1) Active 
                        @else Inactive
                        @endif
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $language->render() !!}
@endsection
