@extends('layouts.app')

@section('title')
  Create Article | @parent
@endsection

@section('content')
  @include('components.error-card')

  <div class="container mt-3">
    <div class="h2 text-center">New Blog</div>

    <div class="row row-cols-xs-1 row-cols-md-2 justify-content-center pt-3">
      <form enctype="multipart/form-data" action="{{ route('article.store') }}" method="post">
        @csrf

        <div class="form-group row">
          <label for="title" class="col-xs-12 col-lg-4 col-form-label">Title</label>
          <input type="text" class="col-xs-12 col-lg-7 mx-3 form-control" id="title" name="title">
        </div>

        <div class="form-group row">
          <label for="category" class="col-xs-12 col-lg-4 col-form-label">Category</label>
          <select class="col-xs-12 col-lg-7 mx-3 form-control" id="category" name="category">
            @php($categories = \App\Category::all())
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group row">
          <label for="photo" class="col-xs-12 col-lg-4 col-form-label">Photo</label>
          <input type="file" class="col-xs-12 col-lg-7 pt-1 form-control-file" id="photo" name="photo">
        </div>

        <div class="form-group row">
          <label for="story" class="col-xs-12 col-lg-4 col-form-label">Description</label>
          <textarea class="col-xs-12 col-lg-7 mx-3 form-control" id="story" rows="10" name="story"></textarea>
        </div>

        <div class="row">
          <div class="col-xs-0 col-lg-4"></div>
          <button type="submit" class="col-xs-12 col-lg-7 mx-3 btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
@endsection
