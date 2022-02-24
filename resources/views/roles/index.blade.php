@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="pull-left">
            <h2>Role Management</h2>
        </div>
        <div class="pull-right">
            {{-- @can('role_create') --}}
                <a class="btn btn-success btn-sm" href="{{ route('roles.create') }}"> Create New Role</a>
            {{-- @endcan --}}
        </div>
    </div></br>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($roles as $key => $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('roles.show', $role->id) }}">Show</a>
                        {{-- @can('role_edit') --}}
                            <a class="btn btn-primary btn-sm" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                        {{-- @endcan --}}
                        {{-- @can('role_delete') --}}
                        {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                        {{-- @endcan --}}

                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
