@extends('layouts.app')


@section('content')
        <div class="container">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('student.index') }}"> Back</a>
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
                <strong>Marks:</strong>
                {{ $student->marks }}
            </div>
        </div>
@endsection