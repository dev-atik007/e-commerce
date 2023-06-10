@extends('backend.master')
@section('content')


<a href="{{route('product.create.form')}}" class="btn btn-success my-2">Create new product</a>
<table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
            <th scope="col">Category</th>
            <th scope="col">Brand</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $key=>$product)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->status}}</td>
            <td>{{$product->Category->name}}</td>
            <td>{{$product->brand->name}}</td>
            <td>
                <img src="{{url('/uploads/'.$product->image)}}" width=50 alt="image">
            </td>
            <td>{{$product->description}}</td>
            <td>
                <a href="{{route('product.view',$product->id)}}" class="btn btn-info">View</a>
                <a href="{{route('product.delete',$product->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $products->links() }}





@endsection