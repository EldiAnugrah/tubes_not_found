@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>

<div class="col-lg-8">
<form method="post" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
      @error('title')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
      @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select class="form-select" name="category_id">
        @foreach ($categories as $category)
        @if(old('category_id') == $category->id)
        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>     
        @else
        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @endif
        
        @endforeach
      </select>
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Post Image</label>
      <img class="img-preview img-fluid mb-3 col-sm-5" id="selected-image">
      <input class="form-control  @error('image') is-invalid @enderror " type="file" id="image" name="image" onchange="previewImage()">
      <a href="" class="card-link see-detail" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="">Cari Gambar?</a>

      <!-- modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Search Image..." id="search-input">
                  <button class="btn btn-dark" type="button" id="search-button">Search</button>
                </div>
            </div>
            <div class="modal-body" >
              <div class="row" id="movie-list">
               <p>. . . </p>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

      @error('image')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    
    </div>

    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      @error ('body')
      <p class="text-danger">{{ $message }}</p>
      @enderror
      <input id="body" type="hidden" name="body" value="{{ old('body') }}">
      <trix-editor input="body"></trix-editor>
    </div>



    <button type="submit" class="btn btn-primary">Create Post</button>
  </form>

</div>

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function() {
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
      .then(response => response.json())
      .then (data => slug.value = data.slug)
  });

  document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
  })

  function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);
    
    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
  }

  </script>
  @endsection