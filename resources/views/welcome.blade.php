@extends('abcd')

@section('title','Home Page')

@section('body')
<h1>Hello Sage from Laravel, Home Page</h1>
<form method="post" action="store-user">
    @csrf
    <input type="text" name="name" placeholder="Enter Your Name"/>
    <input type="text" name="email" placeholder="Enter Your Email"/>
    <input type="submit" />
</form>
@endsection