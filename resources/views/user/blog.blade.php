@extends('layouts.app')

@section('title')
  My Articles | @parent
@endsection

@section('content')
  <div class="container mt-3">
    <div class="h2 text-center">Article List</div>

    <div class="container pt-3 col-lg-7 justify-content-center">
      <table class="table">
        <thead class="thead">
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($articles as $article)
            <tr>
              <td>
                <a href="{{ route('article.show', [ 'article' => $article->id ]) }}">
                  {{ $article->title }}
                </a>
              </td>
              <td>
                <form action="{{ route('article.destroy', [ 'article' => $article->id ]) }}" method="post">
                  @csrf
                  @method('DELETE')

                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <div class="d-flex justify-content-center">
        {{ $articles->links() }}
      </div>
    </div>
  </div>
@endsection
