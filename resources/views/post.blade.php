@extends('layouts.main')

@section('content')
    <div class="col-lg-8 justify">
        <div class="row mb-4" id="movie-list">
            <div class="col-md-8" style="">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>By. <a href="/posts?author={{ $post->author->name }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                        href="/posts?category={{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a></p>

                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                <article class="my-3 fs-6">
                    {!! $post->body !!}
                </article>

                <div class="col-lg-8">
                    <h5>Kolom comment</h5>
                    <form action="" method="post">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <input id="isicomment" type="hidden" name="comment_isi">
                        <trix-editor input="isicomment"></trix-editor>
                        <br>
                        <div style="">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <br>
                    <div class="col-lg-8">
                        @foreach ($post->comment()->orderBy('created_at', 'desc')->get() as $comment)
                            <h5>{{ $comment->user->name }}</h5>
                            <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                            {!! $comment->comment_isi !!}
                            <br>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
@endsection
