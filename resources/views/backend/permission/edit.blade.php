@extends('backend.master')
@section('content')

<form action="{{route('permission.update',$permissions->id)}}" method='post' enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class=row my-3>
        <div class="col-md-2"></div>
            <div class="col-md-6">
                <div>
                 <label for="">Enter Role Name:</label>
                 <input name="name" value="{{$permissions->name}}"placeholder="Enter role name" type="text" class="form-control">
                </div>

                <div>
                   <label for="">Select Status</label>
                   <select name="status" value="{{$permissions->status}}" id="" class="form-control">
                       <option value="active">Active</option>
                       <option value="inactive">InActive</option>
                   </select>
                </div>

             

            <div>
                    <button type="submit" class="btn btn-success my-3">Update</button>
                </div>

           </div>
    </div>
    <div class="col-md-4"></div>


</form>



@endsection
