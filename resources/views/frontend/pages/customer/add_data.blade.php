@extends('backend.master')
@section('content')

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <a href="{{route('show.data')}}" class="btn btn-primary my-3">Show Data</a>
           
        <form action="{{route('store.data')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">name</label>
                <input type="text" class="form-control" name="name" placeholder="Inter your name">
                @error('Name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">address</label>
                <input type="text" class="form-control" name="addrress" placeholder="Inter your address">
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror   
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="number" class="form-control" name="phone" placeholder="Inter your phone">
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror   
            </div>
            <div class="form-group">
                <label for="">Gender</label>
                <input type="text" class="form-control" name="gender" placeholder="Inter your gender">
                @error('gender')
                    <span class="text-danger">{{ $message }}</span>
                @enderror   
            </div>
            
            <input type="submit" class="btn btn-primary my-3" value="Submit">

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>




@endsection