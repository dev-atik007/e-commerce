@extends('backend.master')
@section('content')



<label for="">Category Name:</label>
    <input type="text" value="{{$product->category->name}}" readonly class="form-control">
<label for="">Product Name:</label>
    <input type="text" value="{{$product->name}}" readonly class="form-control">
<label for="">Product Price:</label>
    <input type="text" value="{{$product->price}}" readonly class="form-control">
<label for="">Product Quantity:</label>
    <input type="text" value="{{$product->quantity}}" readonly class="form-control">
<label for="">Description:</label>
    <input type="text" value="{{$product->description}}" readonly class="form-control">   
    <a href="{{route('product.list')}}" class="btn btn-success">Back</a>




@endsection