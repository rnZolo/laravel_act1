
@extends('layout.layout')


@section('form')
    <form action="{{ route('form') }}" method="POST">
    @csrf
    <fieldset class="flex flex-col w-full h-full p-4 gap-4">
        <label for="name">Name : <input type="text" name="name" id="name" class="p-3"></label>
        <label for="date">Date : <input type="date" name="date" id="date" class="p-3"></label>
       <textarea name="content" placeholder="Say Something" id="content" class="p-3"></textarea>
        <button type="submit" name="form" class="btn bg-neutral-900 hover:bg-neutral-800">Button</button>
    </fieldset>
    
    </form>
    <div class="flex flex-col">
        <h1 class="text-lg">{{ $name ?? ''}}</h1>
        <span>{{ $date ?? '' }}</span>
        <p>{{ $content ?? '' }}</p>
    </div>
@endsection