@extends('layouts.app')

@section('content')

<div class="text-center w-4/5 m-auto">
    <div class="py-15"> 
        <h1 class="text-6xl">

            Post A Question

        </h1>
    </div>
</div>
<div class="w-4/5 m-auto pt-20">
    <form action="{{ route('questions.store')}}" method="POST">
        @csrf




            <input type="text" name="title" placeholder="Title...." class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">
            <textarea name="description" placeholder="Description...." class="py-16 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

           

            <button type="submit" class="uppercase mt-15 bg-blue-600 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Submit Question
            </button>


    </form>

</div>
@endsection