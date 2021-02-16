<div class="col mb-4">
  <div class="card h-100">
    <div class="card-header">
      {{ $article->title }}
    </div>

    <div class="card-body">
      <div class="card-text">
        {{ mb_strimwidth($article->description, 0, 97, "...") }}
        <a href="{{ route('article.show', [ 'article' => $article->id ]) }}">
          full story
        </a>
      </div>
    </div>

    <div class="card-footer font-italic font-sm">
      Category:
      <a href="{{ route('category.show', [ 'category' => $article->category->id ]) }}">
        {{ $article->category->name }}
      </a>
    </div>
  </div>
</div>
