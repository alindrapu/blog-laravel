@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">create new post</h1>
  </div>

  <div class="col-lg-8">
    <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label d-block">title</label>
        <input type="text" class="form-control d-block @error('title') is-invalid @enderror" id="title"
          name="title" required value="{{ old('title') }}">
        @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label d-block">slug</label>
        <input type="text" class="form-control d-block @error('slug') is-invalid @enderror" id="slug"
          name="slug" required value="{{ old('slug') }}">
        @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="city">city</label>
        <select class="form-select" name="city_id" id="city-select" style="width: 86%" required>
          @foreach ($cities as $city)
            @if (old('city_id') == $city->id)
              <option value="{{ $city->id }}" selected>{{ $city->name }}</option>
            @else
              <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endif
          @endforeach
        </select>
        @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="category">category</label>
        <select class="form-select" name="category_id" id="category-select" style="width: 86%" required>
          @foreach ($categories as $category)
            @if (old('category_id') == $category->id)
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
          @endforeach
        </select>
        @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">upload your photos</label>
        <img class="img-preview img-fluid">
        <input class="form-control @error('image') is-invalid @enderror " style="width: 87%" type="file" id="image"
          name="image" multiple onchange="previewImage()">
        @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="body" class="form-label d-block">body</label>
        <input id="body" type="hidden" name="body" class="@error('body') is-invalid @enderror" required
          value="{{ old('body') }}">
        <trix-editor input="body"></trix-editor>
        @error('body')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary mb-50" style="margin-bottom: 50px">create post</button>
    </form>
  </div>





  <script>
    // sluggable service
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('keyup', function() {
      fetch('/dashboard/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
    // end of sluggable service

    // disable file function trix
    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    });
    // end of disable file function trix

    // image preview function

    function previewImage = () => {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    
    }
    // end of image preview function
  </script>
@endsection
