@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="pull-left">
            <h1>Users Management</h1>
        </div>
        <div class="pull-right">
          {{-- @can('role_create') --}}
          <a class="btn btn-sm btn-success" href="{{ route('users.create') }}"> Create New User</a>
          {{-- @endcan --}}
            
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
 @foreach ($data as $k => $user)
  <tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email}}</td>
    <td>
      @if(!empty($user->getRoleNames()))
           <label>{{ $user->getRoleNames() }}</label>
      @endif
    </td>
    <td>
       <a class="btn btn-primary btn-sm" href="{{ route('users.show',$user->id) }}">Show</a>
       {{-- @can('role_edit') --}}
       <a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->id) }}">Edit</a>
       {{-- @endcan --}}
         {{-- @can('role_delete') --}}
         {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
         {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
         {!! Form::close() !!}
         {{-- @endcan --}}
           
    </td>
  </tr>
 @endforeach
</table>
</div>
@endsection