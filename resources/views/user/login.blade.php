@extends('layouts.app')

@section('title')
  Login | @parent
@endsection

@section('content')
  @include('components.error-card')

  <div class="container mt-3">
    <div class="h2 text-center">Login</div>

    <div class="row row-cols-xs-1 row-cols-md-2 justify-content-center pt-3">
      <form class="p-1" style="max-width:500px;" action="{{ route('login') }}" method="post">
        @csrf

        <div class="form-group row">
          <label for="email" class="col-xs-12 col-lg-4 col-form-label">Email</label>
          <input type="email" class="col-xs-12 col-lg-7 form-control mx-3" id="email" name="email">
        </div>

        <div class="form-group row">
          <label for="password" class="col-xs-12 col-lg-4 col-form-label">Password</label>
          <input type="password" class="col-xs-12 col-lg-7 form-control mx-3" id="password" name="password">
        </div>

        <div class="row">
          <div class="col-xs-0 col-lg-4"></div>
          <button type="submit" class="col-xs-12 col-lg-7 btn btn-primary mx-3">Login</button>
        </div>
      </form>
    </div>
  </div>
@endsection
