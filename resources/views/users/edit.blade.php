@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="pull-left">
            <h1>Edit New User</h1>
        </div>
    </div>
    {!! Form::open(['route' => ['users.update', $user->id], 'method' => 'PATCH']) !!}
    {{-- {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!} --}}

    <div class="container">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Name:</label>
            {!! Form::text('name', $user->name, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="container">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Email:</label>
            {!! Form::text('email', $user->email, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="container">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Password:</label>
            {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="container">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Confirm Password:</label>
            {!! Form::password('confirm-password', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="container">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Role:</label>
            {!! Form::select('roles[]', $roles, $userRole, ['class' => 'form-control']) !!}
        </div>
    </div>
    </br>
    <div class="container">
        {!! Form::submit('Submit', ['class' => 'btn btn-sm btn-primary']) !!}

    </div>

    {!! Form::close() !!}
@endsection
