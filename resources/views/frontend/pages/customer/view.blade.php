@extends('backend.master')
@section('content')

<!-- <label for="">Customer Name:</label>
    <input type="text" value="{{$customer->name}}" readonly class="form-control">
<label for=""> Customer Email:</label>
    <input type="text" value="{{$customer->email}}" readonly class="form-control"> -->
    
    
<label for="">Customer Name:</label>
    <input type="text" value="{{$customer->name}}" readonly class="form-control">

<label for="">Customer <Address></Address>:</label>
    <input type="address" value="{{$customer->address}}" readonly class="form-control">

<label for="">Customer Phone:</label>
    <input type="phone" value="{{$customer->phone}}" readonly class="form-control">  
    
<label for="">Customer gender:</label>
    <input type="email" value="{{$customer->gender}}" readonly class="form-control">

    <a href="{{route('show.data')}}" class="btn btn-success">Back</a>
    





@endsection