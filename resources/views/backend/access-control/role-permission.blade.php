@extends('backend.master')
@section('content')

<div class="">
        
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled />
        <label class="form-check-label" for="flexCheckDisabled">Disabled checkbox</label>
        </div>

        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled/>
        <label class="form-check-label" for="flexCheckCheckedDisabled">Disabled checked checkbox</label>
        </div>
</div>


@endsection
