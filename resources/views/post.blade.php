@extends('layouts.main')

@section('content')


<div class="col-lg-8 justify">
            <div class="row mb-4" id="movie-list">
            <div class="col-md-8" style="" >
        <h1 class="mb-3">{{ $post->title}}</h1>

        <p>By. <a href="" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

        @if($post->image)
        <div style="max-height: 350px; overflow:hidden;">
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
        </div>
        @else
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
        @endif
        

        <article class="my-3 fs-6">
        {!! $post->body !!}
        </article>

        <a href="/posts" class="d-block mt-3">Back to Posts</a>
        </div>
                
            </div>
        </div>
    </div>


        
@endsection