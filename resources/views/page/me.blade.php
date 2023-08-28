
@extends('layout.layout')

@section('me')
    <div class="some-text w-full h-full relative">
        <div class="flex flex-end gap-3">
            @if(!$message[0]['message'] == "fav" && !$message[0]['message'] == "town")
            <a href={{ route('fav') }} class="btn btn-primary absolute bottom-56 left-2 z-10">prev</a>
            @endif
            <a href={{ route('hometown') }} class="btn btn-primary absolute bottom-56 right-2 z-10">next</a>
        </div>
        <div class=" p-3">
            <h1 class="w-full text-lg uppercase font-bold">{{ $message[1]['title'] }}</h1>
            <h1 class="w-full text-lg font-bold">RENZ JOHN SAGGE</h1>
            <h3 class="w-full text-md font-bold">March 01, 2000</h3>
            <h4 class="w-full text-sm font-bold">Bachelor of Science in Information Techonology Batch 2023</h4>
        </div>
        <img src={{ asset('./asset/img/me.png') }} class="absolute right-0" alt="my avatar">
    </div>
    
@endsection