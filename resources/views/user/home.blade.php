@extends('layouts.app')

@section('title')
  Dashboard | @parent
@endsection

@section('content')
  <div class="container mt-3 h3">
    Welcome {{ Auth::user()->name }}
  </div>
@endsection
