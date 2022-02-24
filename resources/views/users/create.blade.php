@extends('layouts.app')


@section('content')
<div class=" container   ">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1>Create New User</h1>
        </div>
    </div>
</div>
</br>
{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
@csrf
<div class="container">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name :-</label>
    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email :-</label>
    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password :-</label>
    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password :-</label>
    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="form-label">Role :-</label>
    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
  </div>
    </br>
   {!!Form::submit('Submit',array('class' => 'btn btn-primary btn-sm'))!!}

</div>
{!! Form::close() !!}

@endsection