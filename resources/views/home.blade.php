@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Marks</th>
                    @can('edit student')
                    <th scope="col">Edit</th>
                    @endcan
                    @can('delete student')
                    <th scope="col">Delete</th>
                    @endcan
                        
                  </tr>
                </thead>
                <tbody>
                    @foreach ($student_detail as $detail)
                    <tr>
                        <th scope="row">{{$detail->id}}</th>
                        <td>{{$detail->name}}</td>
                        <td>{{$detail->marks}}</td>
                        @can('edit student')
                        <td><a href={{"edit/".$detail->id}}><button type="button" class="btn btn-primary">Edit</button></a></td>
                        @endcan
                        @can('delete student')
                        <td><a href={{"delete/".$detail->id}}><button type="button" class="btn btn-danger">Delete</button></a></td>
                        @endcan
                            
                    </tr>
                    @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
