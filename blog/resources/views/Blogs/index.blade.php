@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <h1>Blog Posts</h1>
                <div>
                    @foreach ($blogs as $blog)
                        <div>
                            <a href="{{ route('blogs.show', $blog->id)}}"> <h3>{{$blog->tittle}} </h3></a>
                           
                            <p>
                                {{$blog->description}}
                            </p>
                        </div>
                        
                    @endforeach
                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection
