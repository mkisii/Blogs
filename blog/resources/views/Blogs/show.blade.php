@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h2> Post </h2>
            <div>
                <div>
                    <h3>{{ $blog->title }}</h3>
                    <p>
                        {{ $blog->description }}
                    </p>
                    {{-- {{ dd($blog->author()) }} --}}
                    {{-- @if ($is_author) --}}
                        @if (Auth::id() === $blog->author()->first()->id)
                        <div class="d-flex">
                            <a id="create-blog" class="btn btn-primary" href="{{ route('blogs.edit', $blog->id) }}"
                                role="button">
                                Update
                            </a>
                            <form method="POST" action="{{ route('blogs.destroy', $blog->id) }}">
                                @csrf
                                @method("DELETE")
                                <button class="ms-4 btn btn-danger" type="submit">
                                    Delete
                                </button>
                            </form>

                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection