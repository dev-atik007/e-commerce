@extends('backend.master')
@section('content')

    <form action="{{route('brand.store.data')}}" method="post" enctype="multipart/form-data">
    @csrf
       <div class="row">
           <div class="col-md-6">
               <div>
               <label for="">Enter Brand Name:</label>
               <input name="name" placeholder="Enter brand name" type="text" class="form-control">
               </div>
               <div>
                   <label for="">Select Status</label>
                   <select name="status" id="" class="form-control">
                       <option value="active">Active</option>
                       <option value="inactive">InActive</option>
                   </select>
               </div>
              <div>
               <label for="">Category Name</label>
               <select name="category_id" id="category_id" class="form-control">
                @foreach ($category as $data)     
                    <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
               </select>
               </div>
               
               <div>
                   <label for="">Upload Image</label>
                   <input type="file" class="form-control">
               </div>
               <div>
                   <label for="">Write description</label>
                   <textarea name="description" placeholder="Enter description" class="form-control"></textarea>
               </div>
                <div>
                    <button type="submit" class="btn btn-success">Create</button>
                </div>

           </div>

       </div>
    </form>
@endsection

