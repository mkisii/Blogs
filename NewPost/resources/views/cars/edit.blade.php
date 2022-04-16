@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center ">
            <h1 class="text-5xl uppercase">
               Update Car
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/cars/{{ $car->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="block">
                <input type="text" class="block shadow-6xl mb-10 p-2 w-90 bold placeholder-gray-600"
                name="name" 
                value="{{$car->name}}">

                <input type="text" class="block shadow-6xl mb-10 p-2 w-90 bold placeholder-gray-600"
                name="founded"
                value="{{$car->founded}}">

                
                <textarea type="text" class="block shadow-6xl mb-10 p-2 w-90 bold placeholder-gray-600"
                name="description" 
                value="">{{$car->description}}</textarea>

                <button type="submit" class="block shadow-6xl mb-10 p-2 w-90 uppercase bg-blue-500 text-white font-bold">
                   Submit
                </button>

            </div>
        </form>
    </div>

    




@endsection