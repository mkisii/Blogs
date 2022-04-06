@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <h1>Blog Posts</h1>
                <div>
                   
                        <div>
                            <h3>"{{$blog->tittle}}"</h3>
                            <p>
                                {{$blog->description}}
                            </p>
                        </div>
                        
                  
                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection