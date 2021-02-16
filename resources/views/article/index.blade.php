@extends('layouts.app')

@section('content')
  <div class="container mt-3">
    <div class="row row-cols-1 row-cols-md-3 pt-3">
      @foreach ($articles as $article)
        @include('components.article-card', [ 'article' => $article ])
      @endforeach
    </div>

    <div class="d-flex justify-content-center">
      {{ $articles->links() }}
    </div>
  </div>
@endsection
