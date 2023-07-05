@extends('backend.master')
@section('content')
<h1>role</h1>

<a href="{{route('role.form')}}" class="btn btn-success">Add new</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach ( $roles as $key=>$data )
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->status}}</td>
      <td>
            <a href="{{route('role.permission',$data->id)}}" class="btn btn-success my-2"> Assign</a>
            <a href="{{route('role.edit',$data->id)}}" class="btn btn-info">Edit</a>
            <a href="{{route('role.delete',$data->id)}}" class="btn btn-danger">Delete</a>
          
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
@endsection
