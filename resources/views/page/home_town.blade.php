
@extends('layout.layout')


@section('town')
    <div class="some-text w-full h-full relative flex flex-col">
        <div class="flex flex-end gap-3">
            <a href={{ route('me') }} class="btn btn-primary absolute bottom-56 left-2">prev</a>
            <a href={{ route('fav') }} class="btn btn-primary absolute bottom-56 right-2">next</a>
        </div>
        <div class="p-3 w-full">
            <h1 class="text-lg">{{ $message[1]['title'] }}</h1>
        </div>
        <div class="p-20 h-[300px]">
            <img src={{ asset('./asset/img/town.jpg') }} class="aspect-square mx-auto" width="300px" height="300px
            " alt="binangonan">

        </div>
    </div>
@endsection