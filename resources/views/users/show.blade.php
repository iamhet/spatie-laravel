@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="pull-left">
            <h2> Show User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
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
                @foreach($user->getRoleNames() as $v)
                    <label class="badge badge-success">{{ $v }}</label>
                @endforeach
            @endif
        </div>
  
</div>
@endsection