@extends('layouts.app')

@section('title')
  Edit Profile | @parent
@endsection

@section('content')
  @include('components.error-card')

  <div class="container mt-3">
    <div class="h2 text-center">Profile</div>

    <div class="row row-cols-xs-1 row-cols-md-2 justify-content-center pt-3">
      <form class="p-1" style="max-width:500px;" action="{{ route('user.update', [ 'user' => Auth::id() ]) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group row">
          <label for="name" class="col-xs-12 col-lg-4 col-form-label">Name</label>
          <input type="text" class="col-xs-12 col-lg-7 mx-3 form-control" id="name" name="name" value="{{ Auth::user()->name }}">
        </div>

        <div class="form-group row">
          <label for="email" class="col-xs-12 col-lg-4 col-form-label">Email Address</label>
          <input type="email" class="col-xs-12 col-lg-7 mx-3 form-control" id="email" name="email" value="{{ Auth::user()->email }}">
        </div>

        <div class="form-group row">
          <label for="phone" class="col-xs-12 col-lg-4 col-form-label">Phone Number</label>
          <input type="text" class="col-xs-12 col-lg-7 mx-3 form-control" id="phone" name="phone_number" value="{{ Auth::user()->phone }}">
        </div>

        <div class="row">
          <div class="col-xs-0 col-lg-4"></div>
          <button type="submit" class="col-xs-12 col-lg-7 mx-3 btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
@endsection
