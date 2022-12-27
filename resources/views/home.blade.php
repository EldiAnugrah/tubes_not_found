@extends('layouts.main')

@section('content')

        <div class="col-lg-8 justify">
            <div class="row mb-4" id="movie-list">
                @foreach($posts as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }} </h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="/home/{{ $post->slug }}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>

@endsection


