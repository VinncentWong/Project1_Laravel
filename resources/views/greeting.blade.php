@extends('layouts.base')

@section('additional_body')
    <div class = "position-fixed" style= "left: 93%; color: white; font-weight: bolder">
        <a class="p-3 mb-2 bg-dark text-white" href="/customer/login">Login</a>
    </div>
    <div class = "position-fixed" style= "left: 35%; top: 50%; color: white; font-weight: bolder">
        <h1> Welcome !</h1>
    </div>
    <div class = "position-fixed" style= "left: 35%; top: 60%; color: white; font-weight: bolder">
        <a href="/customer/signup">Register yourself
    </div>
@endsection
