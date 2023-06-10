@extends('backend.master')
@section('content')

    <form action="{{route('role.store')}}" method="post">
    @csrf
       <div class="row">
           <div class="col-md-6">
               <div>
               <label for="">Role Name:</label>
               <input name="name" placeholder="Role name" type="text" class="form-control">
               </div>
               <div>
                   <label for="">Select Status</label>
                   <select name="status" id="" class="form-control">
                       <option value="active">Active</option>
                       <option value="inactive">InActive</option>
                   </select>
               </div>
              
               
                <div>
                    <button type="submit" class="btn btn-success">Create</button>
                </div>

           </div>

       </div>
    </form>
@endsection

