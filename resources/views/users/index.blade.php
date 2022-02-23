@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
        </div>
    </div>
  </br>
<div class="container">
<table class="table table-bordered">
 <tr>
   <th>Id</th>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email}}</td>
    <td>
      Admin
    </td>
    <td>
       <a class="btn btn-primary" href="{{ route('users.show',$user->id) }}">Show</a>
       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
       {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
       {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
       {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>
</div>
@endsection