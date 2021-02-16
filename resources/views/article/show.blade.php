@extends('layouts.app')

@section('title')
  {{ $article->title }} | @parent
@endsection

@section('content')
  <div class="container mt-3 pt-3">
    <div class="h1 d-inline-flex">
      {{ $article->title }}
      @can('delete_article', $article)
        <form class="ml-5" action="{{ route('article.destroy', [ 'article' => $article->id ]) }}" method="post">
          @csrf
          @method('DELETE')

          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      @endcan
    </div>

    <div class="row mt-3 justify-content-center">
      <div class="col-xs-12 col-md-5 p-0">
        <img src="{{ Storage::url($article->image) }}" class="img-fluid" width="100%" alt="NO IMAGE">
      </div>
    </div>

    <div class="mt-3 pt-3 text-justify">{{ $article->description }}</div>
  </div>

  <div class="container mt-3 pt-3">
    <a href="{{ url()->previous() }}" class="btn btn-info">
      Back
    </a>
  </div>
@endsection
