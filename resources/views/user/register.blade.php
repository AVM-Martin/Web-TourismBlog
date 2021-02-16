@extends('layouts.app')

@section('title')
  Register | @parent
@endsection

@section('content')
  @include('components.error-card')

  <div class="container mt-3">
    <div class="h2 text-center">Register</div>

    <div class="row row-cols-xs-1 row-cols-md-2 justify-content-center pt-3">
      <form class="p-1" style="max-width:500px;" action="{{ route('register') }}" method="post">
        @csrf

        <div class="form-group row">
          <label for="name" class="col-xs-12 col-lg-4 col-form-label">Name</label>
          <input type="text" class="col-xs-12 col-lg-7 mx-3 form-control" id="name" name="name">
        </div>

        <div class="form-group row">
          <label for="email" class="col-xs-12 col-lg-4 col-form-label">Email</label>
          <input type="email" class="col-xs-12 col-lg-7 mx-3 form-control" id="email" name="email">
        </div>

        <div class="form-group row">
          <label for="password" class="col-xs-12 col-lg-4 col-form-label">Password</label>
          <input type="password" class="col-xs-12 col-lg-7 mx-3 form-control" id="password" name="password">
        </div>

        <div class="form-group row">
          <label for="password_confirmation" class="col-xs-12 col-lg-4 col-form-label">Confirm Password</label>
          <input type="password" class="col-xs-12 col-lg-7 mx-3 form-control" id="password_confirmation" name="password_confirmation">
        </div>

        <div class="form-group row">
          <label for="phone" class="col-xs-12 col-lg-4 col-form-label">Phone Number</label>
          <input type="text" class="col-xs-12 col-lg-7 mx-3 form-control" id="phone" name="phone_number">
        </div>

        <div class="row">
          <div class="col-xs-0 col-lg-4"></div>
          <button type="submit" class="col-xs-12 col-lg-7 mx-3 btn btn-primary">Register</button>
        </div>
      </form>
    </div>
  </div>
@endsection
