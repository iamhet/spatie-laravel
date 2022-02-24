@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="pull-left">
            <h1>Edit Role</h1>
        </div>
    </div>
    </br>
    {!! Form::model($role, ['method' => 'PATCH', 'route' => ['roles.update', $role->id]]) !!}
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
                <label> {{ Form::checkbox('permission[]', $value->id, in_array($value->id,$rolePermissions)? true : false) }} {{ $value->name }}</label>
                    {{ $value->name }}</label>
                <br />
            @endforeach
        </div>
    </div></br>
    <div class="container">
        {!!Form::submit('Submit',array('class' => 'btn btn-sm btn-primary'))!!}
    </div>
    {!! Form::close() !!}
@endsection
