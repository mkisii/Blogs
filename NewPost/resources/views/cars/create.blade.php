@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center ">
            <h1 class="text-5xl uppercase">
               Create Cars
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/cars" method="POST">
            @csrf
            <div class="block">
                <input type="text" class="block shadow-6xl mb-10 p-2 w-90 bold placeholder-gray-600"
                name="name" placeholder="Brand name...">

                <input type="text" class="block shadow-6xl mb-10 p-2 w-90 bold placeholder-gray-600"
                name="founded" placeholder="Founded...">

                <textarea type="text" class="block shadow-6xl mb-10 p-2 w-150 bold placeholder-gray-600"
                name="description" placeholder="Description..."></textarea>

                <button type="submit" class="block shadow-6xl mb-10 p-2 w-90 uppercase bg-blue-500 text-white font-bold">
                   Submit
                </button>

            </div>
        </form>
    </div>

    




@endsection