@extends('backend.master')
@section('content')
<h1>Permission</h1>

<a href="" class=""></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($permissions as $key=>$data)
                
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->status}}</td>
      <td>
            
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
@endsection
