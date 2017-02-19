@extends('backend.layouts.backend')
@section('content')

    <h2>{{ $user->exists ? 'Edit a user' : 'Create a user'}} </h2>

    <form method="POST" action="{{ $user->exists ? '/admin/users/'.$user->id : '/admin/users'}}">

        {{ $user->exists ? method_field('PATCH') : ''}}

        {{ csrf_field() }}


        @include('layouts.partial.errors')


        <div class="form-group">
            <label for="name">Name</label>
            <input type="name" class="form-control" id="name" name="name" required value="{{old('name') ? old('name') : $user->name}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') ? old('email') : $user->email }}">
        </div>


        <button type="submit" class="btn btn-primary">{{ $user->exists ? 'Edit' : 'Add'}}</button>
    </form>




@endsection
