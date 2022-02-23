@extends('layouts.app')


@section('content')
        <div class="container">
            <div class="pull-left">
                <h2>Edit student</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
        <div class="container">
         <form action="{{ route('students.update',$student->id) }}" method="POST">
    	@csrf
        @method('PUT')
		    <div class="container">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name" value="{{ $student->name }}" class="form-control" placeholder="Name">
		        </div>
		    </div>
		    <div class="container">
		        <div class="form-group">
		            <strong>Marks:</strong>
                    <input type="text" name="marks" value="{{ $student->marks }}" class="form-control" placeholder="Marks">
		        </div>
		    </div>
		    <div class="container">
		      <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
    </form>
        </div>
@endsection
