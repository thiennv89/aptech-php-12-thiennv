@extends('home')

@section('title', 'Contact')

@section('header')
    @parent

    <p>this is append</p>
@endsection

@section('content')
    @parent
    <p>My name is Thien</p>
    <p>My address: Da Nang</p>
    <p>My tele: 0989080124</p>
@endsection

@section('footer')

@endsection