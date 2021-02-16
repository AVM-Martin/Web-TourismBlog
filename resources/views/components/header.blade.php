<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
  <a class="navbar-brand" href="{{ route('home') }}">
    {{ config('app.name', 'Laravel') }}
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
      </li>

      @auth
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.dashboard') }}">Dashboard</a>
        </li>
      @endauth

      @can('admin', App\User::class)
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.index') }}">User</a>
        </li>

      @elsecan('user', App\User::class)
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.profile') }}">Profile</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.blog') }}">Blog</a>
        </li>

      @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @php($categories = \App\Category::all())
            @foreach($categories as $category)
              <a class="dropdown-item" href="{{ route('category.show', [ 'category' => $category->id ]) }}">
                {{ $category->name }}
              </a>
            @endforeach
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">About Us</a>
        </li>
      @endcan
    </ul>

    <ul class="navbar-nav ml-auto">
      @can('user')
        <li class="nav-item">
          <a class="nav-link" href="{{ route('article.create') }}">
            <i class="bi bi-plus-circle"></i> Create Blog
          </a>
        </li>
      @endcan

      @auth
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.logout') }}">
            <i class="bi bi-box-arrow-right"></i> Logout
          </a>
        </li>
      @else
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.register') }}">
            <i class="bi bi-person-fill"></i> Signup
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.login') }}">
            <i class="bi bi-box-arrow-in-right"></i> Login
          </a>
        </li>
      @endauth
    </ul>
  </div>
</nav>
