@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="pull-left">
            <h1> Show User</h1>
        </div>
    </div>
</br>

<div class="container">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Name :-</label>
            {{ $user->name }}
        </div>
    
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Email :-</label>
            {{ $user->email }}
        </div>
    
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Role :-</label>
            @if(!empty($user->getRoleNames()))
            {{ $user->getRoleNames() }}
            @endif
        </div>
  
</div>
@endsection