@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="pull-left">
            <h1>Create New Role</h1>
        </div>
    </div>
    {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
    <div class="container">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Name:</label>
            {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="container">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Permission:</label>
            <br />
            @foreach ($permission as $value)
                {{ Form::checkbox('permission[]', $value->id, false) }} {{ $value->name }}
                <br />
            @endforeach
        </div>
    </div>
    <div class="container">
        {!! Form::submit('Submit', ['class' => 'btn btn-sm btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection
