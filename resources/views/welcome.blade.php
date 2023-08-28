@extends('layout.layout')


@section('welcome')
    <div class="w-full h-full flex flex-col justify-center align-center">
        <h1 class="text-[5vw] text-center"> WELCOME</h1>
        <a href={{route('me')}} class="btn btn-primary w-44 mx-auto">some info</a>
    </div>
@endsection