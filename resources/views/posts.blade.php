@extends('layouts.main')

@section('content')
    <div class="col-lg-8 justify">
        <div class="row mb-4" id="review">
            <h3 class="text-center mb-4">
                Berita Film
            </h3>
            @if($posts->count())
            @foreach ($posts as $post)
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)">
                            <a href="/posts?category={{ $post->category->slug }}" class=" text-white text-decoration-none">
                                {{ $post->category->name }}
                            </a>
                            </div>    
                    <!-- pengkondisian gambar default -->
                        @if($post->image)
                        <div style="max-height:400px; overflow:hidden;" >
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="card-img-top">
                        </div>
                        @else
                        <!-- tampil category database  -->
                        <img src="https://source.unsplash.com/400x400?{{ $post->category->name }}" class="card-img-top"
                            alt="{{ $posts[0]->category->name }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }} </h5>
                            <a href="/posts?author={{ $post->author->name }}" class="fs-6 text-muted" style="text-decoration:none;">by . {{ $post->author->name }} </a>
                            <p class="card-text fs-6">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-warning">Read</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        @else
        <p class="text-center fs-4">No posts found.</p>
        @endif

        <!-- pagination post -->
        <div class="row d-flex justify-content-end">
            {{ $posts->links() }}
        </div>

        <hr>

        <!-- bagian film -->
        <section id="film-popler">
                <div class="row mb-4" id="populer">
                    <h3 class="text-center mb-4">
                        Film Populer
                    </h3>

                    <!-- slider -->
                    <div class="owl-carousel owl-theme">
                        @foreach ($populer as $pop)
                                <div class="card" id="detail">
                                    <img src="{{ 'https://image.tmdb.org/t/p/w400/' . $pop['poster_path'] }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $pop['title'] }} </h5>
                                        <span class="ml-1 fs-6">{{ $pop['vote_average'] * 10 . '%' }} </span>
                                        <span class="mx-2 fs-6"> | </span>
                                        <span>{{ \Carbon\Carbon::parse($pop['release_date'])->format('M d, Y') }} </span>
                                        <p class="card-text">
                                            @foreach ($pop['genre_ids'] as $genre)
                                                {{ $genres->get($genre) }}@if (!$loop->last)
                                                    ,
                                                @endif
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                    
                </div>
        </section>
        
    </div>
    </div>
@endsection
