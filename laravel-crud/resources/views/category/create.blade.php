@extends('layout.master')

@section ('content')

<h3>Add New Category</h3>
<form action="{{route('store')}}" method="post">
    <input type="hidden" name="_method" value="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="category">Category Name:</label>
        <input type="text" class="form-control" id="category" placeholder="Category Name" name="category">
    </div>
    <div class="form-group">
        <button class="btn btn-primary">
            ADD
        </button>
    </div>
</form>

@endsection