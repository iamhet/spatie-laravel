@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="pull-left">
            <h1>Add New Student</h1>
        </div>
    </div>
    </br></br>
    <div class="container">
        {!! Form::open(['route' => 'student.store', 'method' => 'POST']) !!}
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Name :-</label>
                {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="container">
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Marks :-</label>
                {!! Form::text('marks', null, ['placeholder' => 'Marks', 'class' => 'form-control']) !!}
            </div>
        </div>
        </br>
        <div class="container">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-sm']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
