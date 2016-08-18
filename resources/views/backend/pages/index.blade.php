@extends('layouts.backend')

@section('title', 'Menus')

@section('content')
<div class="ibox float-e-margins">
    <div class="ibox-title">
    <div class="ibox-tools">
    <a href="{{route('backend.pages.create')}}" class="btn btn-primary ">Add Menu</a>
    </div>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <td>Menu EN</td>
                <td>Menu VN</td>
                <td>Menu JP</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
            @if($pages->isEmpty())
                <tr>
                    <td colspan="5" align="center">There are no pages.</td>
                </tr>
            @else
                @foreach($pages as $page)
                    <tr class="{{ $page->hidden ? 'warning' : '' }}">
                        <td>
                            {{$page->title_en}}
                        </td>
                        <td>
                            {{$page->title_vn}}
                        </td>
                        <td>
                            {{$page->title_jp}}
                        </td>
                        <td>
                            <a href="{{ route('backend.pages.edit', $page->id) }}">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('backend.pages.confirm', $page->id) }}">
                                <span class="glyphicon glyphicon-remove"></span>
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
