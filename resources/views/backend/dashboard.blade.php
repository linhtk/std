@extends('layouts.backend')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <ul class="list-group">
            </ul>
        </div>
        <div class="col-md-6">
            <ul class="list-group">
                @foreach($users as $user)
                    <li class="list-group-item">
                        <h4>{{ $user->name }}</h4>

                        Last login {{ $user->last_login_difference }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
