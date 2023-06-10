@extends('backend.master')
@section('content')



<label for="">Name:</label>
    <input type="text" value="{{$permission->name}}" readonly class="form-control">
<label for="">Status:</label>
    <input type="text" value="{{$permission->status}}" readonly class="form-control">  
    <a href="{{route('permission.list')}}" class="btn btn-success">Back</a>




@endsection