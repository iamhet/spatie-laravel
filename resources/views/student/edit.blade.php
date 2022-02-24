@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="pull-left">
            <h1>Edit Student</h1>
        </div>
    </div>
    {!! Form::open(['route' => ['student.update', $student->id], 'method' => 'PATCH']) !!}
    @csrf
    <div class="container">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Name:</label>
            {!! Form::text('name', $student->name, array('placeholder' => 'Name','class' => 'form-control')) !!}
		</div>
    </div>
    <div class="container">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Marks:</label>
			{!! Form::text('marks', $student->marks, array('placeholder' => 'Marks','class' => 'form-control')) !!}

        </div>
    </div>
    </br>
    <div class="container">
		{!!Form::submit('Submit',array('class' => 'btn btn-sm btn-primary'))!!}
    </div>
    {!! Form::close() !!}
@endsection

<script>
    $(document).ready(function(){

$(document).on("click", "#update_data", function() { 
    var url = "{{URL('userData/'.$userData->id)}}";
    var id= 
    $.ajax({
        url: url,
        type: "PATCH",
        cache: false,
        data:{
            _token:'{{ csrf_token() }}',
            type: 3,
            name: $('#name').val(),
            email: $('#email').val(),
            phone: $('#phone').val(),
            city: $('#city').val()
        },
        success: function(dataResult){
            dataResult = JSON.parse(dataResult);
         if(dataResult.statusCode)
         {
            window.location = "/userData";
         }
         else{
             alert("Internal Server Error");
         }
            
        }
    });
}); 
});

</script>