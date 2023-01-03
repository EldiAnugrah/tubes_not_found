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

                <div class="card">
                    <div class="card-header">
                        Leave Comment Below
                    </div>
                    <div class="card-body">
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
                    </div>
                </div>
                <br>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-10">
                            @foreach ($post->comment()->orderBy('created_at', 'desc')->get() as $comment)
                                <div class="card bg-light mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $comment->user->name }}</h5>
                                        <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                                        <p class="card-text">{!! $comment->comment_isi !!}</p>
                                        {{-- <input type="hidden" name="post_id" value="{{ $comment->id }}">
                                        <input id="isireply" type="hidden" name="reply_isi">
                                        <trix-editor input="isireply"></trix-editor>
                                        <button type="submit"class="btn btn-secondary btn-sm mt-2">Reply</button> --}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="card bg-light mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $reply->user->name }}</h5>
                                <small class="text-muted">{{ $reply->created_at->diffForHumans() }}</small>
                                <p class="card-text">{!! $reply->reply_isi !!}</p>
                            </div> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
@endsection
