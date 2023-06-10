@extends('backend.master')
@section('content')
<h1>Brand</h1>

<a href="{{route('brand.form')}}" class="btn btn-success">Add new</a>
@csrf
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">category</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($brands as $key=>$brand )
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$brand->name}}</td>
      <td>{{$brand->description}}</td>
      <td>{{$brand->status}}</td>
      <td>{{$brand->category->name}}</td>
      <td>
            <img src="{{url('/uploads/'.$brand->image)}}" width=50 alt="image">
      </td>
      <td>
            <a href="" class="btn btn-primary">View</a>
            <a href="" class="btn btn-success">Edit</a>
            <a href="{{route('brand.list.delete',$brand->id)}}" class="btn btn-danger">Delete</a>
          
      </td>
    </tr>
  @endforeach
    
    
  </tbody>
</table>

{{ $brands->links() }}
@endsection
