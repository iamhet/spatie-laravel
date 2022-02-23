@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="pull-left">
            <h2>Students</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('student.create') }}"> Create New Student</a>

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
                        <a class="btn btn-primary" href="{{ route('student.show', $std->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('student.edit', $std->id) }}">Edit</a>
                        @csrf
                        {!! Form::open(['method' => 'DELETE', 'route' => ['student.destroy', $std->id], 'style' => 'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}

                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
