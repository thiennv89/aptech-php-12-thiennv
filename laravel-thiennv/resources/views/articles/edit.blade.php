@extends('articles.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Article</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('articles.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('articles.update', $article->id)}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        @include('articles.form'); 
    </form>

{{-- 
    {!! Form::model($article, ['method' => 'PATCH','route' => ['articles.update', $article->id]]) !!}
        @include('articles.form')
    {!! Form::close() !!} --}}


@endsection