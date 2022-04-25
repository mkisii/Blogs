@extends('layouts.app')

@section('content')

<div class="text-center w-4/5 m-auto">
    <div class="py-15"> 
        <h1 class="text-6xl">

            {{$questions->title}}

        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">Posted
        by:<span class="font-bold-italic text-gray-800"> {{$questions->user->name}} 
            </span>, Created on {{date('jS M Y', strtotime($questions->updated_at))}}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{$questions->description}}
    </p>
</div>
@endsection