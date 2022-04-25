@extends('layouts.app')

@section('content')

<div class="text-center w-4/5 m-auto">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">

            All Questions

        </h1>
    </div>

    @if (session()->has('messsage'))
        <div class="pt-15 w-4/5 m-auto mt-10 pl-2">
            <p class="w-1/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">

                {{session()->get('message')}}

            </p>


        </div>
    @endif
    @foreach ($questions as $question)
        <div class="sm:grid gap-20 w-4/5 mx-auto border-b border-gray-200 ">
            <div>
                <h2 class="text-center text-gray-700 text-bold text-xl hove:text-gray-500">
                    <a href="{{ route('questions.show', $question->id)}}"> <h3>{{$question->title}} </h3></a>
                </h2>
                <p class=" text-center text-lg text-gray-700 py-6"> 
                    Question Details: {{$question->description}}
                </p>

                <span class="text-gray-500">Posted
                    by:<span class="font-bold-italic text-gray-800"> {{$question->user->name}} 
                        </span>, Created on {{date('jS M Y', strtotime($question->updated_at))}}
                </span>
            </div>

        </div>
        
    @endforeach


</div>

@endsection