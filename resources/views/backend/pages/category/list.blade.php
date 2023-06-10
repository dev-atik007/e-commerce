@extends('backend.master')
@section('content')
<h1>Category</h1>

<a href="{{route('category.form')}}" class="btn btn-success">Add new</a>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category Name</th>
      <th scope="col">Status</th>
      <th scope="col">Description</th>
      <th scope="col">Parent Id</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
          @foreach($categories as $key=>$category)
          <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->status}}</td>
                <td>{{$category->description}}</td>
                <td>{{$category->parent_id}}</td>
                <td>
                      <a href="{{route('category.view',$category->id )}}" class="btn btn-primary">View</a>
                      <a href="" class="btn btn-success">Edit</a>
                      <a href="{{route('category.delete', $category->id)}}" class="btn btn-danger">Delete</a>
                </td>
          </tr>

          @endforeach
   
  </tbody>
</table>
  {{ $categories->links() }}
@endsection
