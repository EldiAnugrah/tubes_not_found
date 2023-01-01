@extends('layouts.main')

@section('content')
    <div class="col-lg-8 justify">
        <div class="row mb-4">
            <h3 class="text-center">Bosen Nonton Film? Coba Gacha Film</h3>
        </div>

        <div class="container d-flex justify-content-center mb-5">
            <button class="btn btn-warning" id="btn-gacha">
                Gacha
            </button> 
        </div>

        <div class="row" id="hasil-gacha">
        <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="" class="img-fluid" id="img_gacha">
                            </div>
                            <div class="col-md-8">
                                <ul class="list-group">
                                    <li class="list-group-item"><h3 id="title_gacha">Title : </h3></li>
                                    <li class="list-group-item" id="released_gacha">Release : </li>
                                    <li class="list-group-item" id="rating_gacha">Rating : </li>
                                    <li class="list-group-item" id="sinopsis_gacha">Sinopsis : </li>
                                </ul>
                            </div>
                        </div>
                    </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Movie Search</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
@endsection