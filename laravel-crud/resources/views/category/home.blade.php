@extends('layout.master')

@section('content')
<table class="table table-hover table-bordered">
    <caption>
      <form action="{{route('create')}}" method="GET">
        <button class="btn btn-success pt-2">
          Add More
        </button>
      </form>
    </caption>
    <thead class="thead-light">
      <tr>
          <th scope="col" class="">#</th>
          <th scope="col" class="w-25">Name</th>
          <th scope="col" class="w-25">Created Date</th>
          <th scope="col" class="w-25">Updated Date</th>
          <th scope="col" class="w-25">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $value)
      <tr>
        <th scope="row">{{$value->id}}</th>
        <td>{{$value->name}}</td>
        <td>{{$value->created_at}}</td>
        <td>{{$value->updated_at}}</td>
        <td class="d-flex">
          <form action="{{route('show',$value->id)}}" method="get">
              <button class="btn btn-infor btn-sm mx-2">Show</button>
          </form>
          <form action="{{route('edit',$value->id)}}" method="get">
              <button class="btn btn-primary btn-sm mx-2">Edit</button>
          </form>
          <form action="{{route('destroy',$value->id)}}" method="post">
              <input type="hidden" name="_method" value="delete">
              {{csrf_field()}}
              <button class="btn btn-danger btn-sm mx-2">Delete</button>
          </form>  
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection