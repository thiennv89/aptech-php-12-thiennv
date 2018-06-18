@extends('layout.master')

@section ('content')

<h3>Edit Category</h3>
<form action="{{route('update',$value->id)}}" method="post">
    <input type="hidden" name="_method" value="put">
    {{csrf_field()}}
    <div class="form-group">
        <label for="category">Category Name:</label>
        <input type="text" class="form-control" id="category" placeholder="Category Name" name="category" value="{{$value->name}}">
    </div>
    <div class="form-group">
        <button class="btn btn-info">
            EDIT
        </button>
    </div>
</form>

@endsection