@extends('layouts.main')

@section('content')
    <div class="col-lg-8 justify">
        <div class="row mb-4">
            <h3 class="text-center">Bosen Nonton Film? Coba Gacha Film</h3>
        </div>

        <div class="container d-flex justify-content-center">
            <button class="btn btn-warning" id="btn-gacha">
                Gacha
            </button> 
        </div>

        <div class="row" id="hasil-gacha">

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
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
@endsection