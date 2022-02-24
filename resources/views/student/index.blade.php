@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="pull-left">
            <h1>Students</h1>
        </div>
        <div class="pull-right">
            @can('student_create')
                <a class="btn btn-success btn-sm" href="{{ route('student.create') }}"> Create New Student</a>
            @endcan
        </div>
    </div>
    </br>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Marks</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($student as $std)
                <tr>
                    <td>{{ $std->id }}</td>
                    <td>{{ $std->name }}</td>
                    <td>{{ $std->marks }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('student.show', $std->id) }}">Show</a>
                        @can('student_edit')
                            <a class="btn btn-sm btn-primary" href="{{ route('student.edit', $std->id) }}">Edit</a>
                        @endcan
                        @can('student_delete')
                            @csrf
                            {!! Form::open(['method' => 'DELETE', 'route' => ['student.destroy', $std->id], 'style' => 'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endcan
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
    
@endsection
