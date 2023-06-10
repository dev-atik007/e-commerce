@extends('backend.master')
@section('content')

<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6">
            <div>
                <label for="">Name:</label>
                <input name="name" placeholder="Enter Product name" type="text" class="form-control">
            </div>
            <div>
                <label for="">price</label>
                <input name="price" placeholder="Enter Product Price" type="number" class="form-control">
            </div>

            <div>
                <label for="">Select Status</label>
                <select name="status" id="" class="form-control">
                    <option value="active">Active</option>
                    <option value="inactive">InActive</option>
                </select>
            </div>

            <div>
                <label for="">Category</label>
                <select name="category_id" placeholder="Category_name" type="number" class="form-control">
                    @foreach ($categories as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="">Brand</label>
                <select name="brand_id" placeholder="Brand_id" type="text" class="form-control">
                    @foreach ($brands as $data)
                        <option value="{{$data->id}}">{{ $data->name }}</option>
                    @endforeach
                 </select>
            </div>

            <div>
                <label for="">Upload Image</label>
                <input name="product_image" type="file" class="form-control">
            </div>

            <div>
                <label for="">Write description</label>
                <textarea name="description" placeholder="Enter description" class="form-control"></textarea>
            </div>


            <div>
                <button type="submit" class="btn btn-success">Create</button>
            </div>

        </div>
        <div class="col-md-4"></div>

    </div>
</form>




@endsection