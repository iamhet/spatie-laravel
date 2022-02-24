@extends('layouts.app')


@section('content')
        <div class="container">
            <div class="pull-left">
                <h1> Show Student</h1>
            </div>
        </div>
        <div class="container">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $student->name }}
            </div>
        </div>
        <div class="container">
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Marks:</label>
                {{ $student->marks }}
            </div>
        </div>
@endsection