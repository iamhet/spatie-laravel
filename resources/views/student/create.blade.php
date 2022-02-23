@extends('layouts.app')


@section('content')
        <div class="container">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('student.index') }}"> Back</a>
            </div>
        </div>
    </br></br>
        <div class="container">
    <form action="{{ route('student.store') }}" method="POST">
    	@csrf
		    <div class="container">
		        <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Name :-</label>
		            <input type="text" name="name" class="form-control" placeholder="Name">
		        </div>
		    </div>
		    <div class="container">
		        <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Marks :-</label>
		            <input type="text" name="marks" class="form-control" placeholder="Marks">
		        </div>
		    </div>
        </br>
		    <div class="container">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
    </form>
        </div>
@endsection