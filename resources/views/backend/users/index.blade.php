@extends('backend.layouts.backend')
@section('content')

    @include('layouts.partial.errors')

    <a href="{{ route('users.create') }}" class="btn btn-primary">Add user</a>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}">{{$user->name}}</a>
                </td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}"><span class="glyphicon glyphicon-edit"></span></a>
                </td>
                <td>
                    <a href="{{ route('users.confirm', $user->id) }}"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

        {!! $users->render() !!}

@endsection

