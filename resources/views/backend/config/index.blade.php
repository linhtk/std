@extends('layouts.backend')

@section('title', 'Configuration')

@section('content')
<div class="ibox float-e-margins">
    <div class="ibox-title">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <td>Page Title</td>
                <td>Fax</td>
                <td>Phone</td>
                <td>Email</td>
                <td>Edit</td>
            </tr>
        </thead>
        <tbody>
            @if($config->isEmpty())
                <tr>
                    <td colspan="5" align="center">There are no pages.</td>
                </tr>
            @else
                @foreach($config as $aconfig)
                    <tr class=>
                        <td>
                            {{$aconfig->pageTitle}}
                        </td>
                        <td>
                            {{$aconfig->fax}}
                        </td>
                        <td>
                            {{$aconfig->phone}}
                        </td>
                        <td>
                            {{$aconfig->email}}
                        </td>
                        <td>
                            <a href="{{ route('backend.config.edit', $aconfig->id) }}">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    </div>
</div>
@endsection
