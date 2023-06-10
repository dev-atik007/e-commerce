@extends('backend.master')
@section('content')


<label for="">Category Name:</label>
    <input type="text" value="{{$category->name}}" readonly class="form-control">

<label for="">Description:</label>
    <input type="text" value="{{$category->description}}" readonly class="form-control"> 

    <a href="{{route('category.list')}}" class="btn btn-success">Back</a>






@endsection