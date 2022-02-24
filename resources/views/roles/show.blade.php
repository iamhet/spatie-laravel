@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="pull-left">
            <h2> Show Role</h2>
        </div>
    </div>
    <div class="container">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $role->name }}
        </div>
    </div>
    <div class="container">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Permissions:</label>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $value)
                    <label class="label label-success">{{ $value->name }},</label>
                @endforeach
            @endif
        </div>
    </div>
@endsection