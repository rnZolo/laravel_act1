
@extends('layout.layout')


@section('fav')
    <div class="some-text w-full h-full relative">
        <div class="flex flex-end gap-3">
            <a href={{ route('hometown') }} class="btn btn-primary absolute bottom-56 left-2">prev</a>
            @if(!$message[0]['message'] == "me" && !$message[0]['message'] == "town")
               <a href={{ route('me') }} class="btn btn-primary absolute bottom-56 right-2">next</a>
            @endif
        </div>
        <div class="p-3 mb-20">
            <h1 class="text-lg">{{ $message[1]['title'] }}</h1>
        </div>
        <div class="w-full h-fit flex gap-4 flex-wrap px-10 justify center align-center">
            <div class="aspect-square mx-auto w-[200px] h-[200px] flex">
                <span class="flex w-full h-full bg-violet-500"></span>
                <span class="flex w-full h-full bg-green-500"></span>
                <span class="flex w-full h-full bg-amber-900"></span></div>
            <img src={{ asset('./asset/img/zorochopper.jpg') }} class="aspect-square mx-auto" width="200px" height="200px
            " alt="zoro chopper">
            <img src={{ asset('./asset/img/lomi.jpg') }} class="aspect-square mx-auto" width="200px" height="200px
            " alt="lomi">
        </div>
    </div>
@endsection