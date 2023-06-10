@extends('backend.master')
@section('content')

    <form action="{{route('category.store')}}" method="post">
    @csrf
       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-6">
               <div>
               <label for="">Enter Category Name:</label>
               <input name="cat_name" placeholder="Enter category name" type="text" class="form-control">
               </div>

               <div>
                   <label for="">Select Status</label>
                   <select name="status" id="" class="form-control">
                       <option value="active">Active</option>
                       <option value="inactive">InActive</option>
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
                   <label for="">Parent Id</label>
                   <select name="parent_id" id="" class="form-control">
                    <option value="">null</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                   </select>
                   
               </div>
               
                <div>
                    <button type="submit" class="btn btn-success">Create</button>
                </div>

           </div>
           <div class="col-md-4"></div>

       </div>
    </form>
@endsection

