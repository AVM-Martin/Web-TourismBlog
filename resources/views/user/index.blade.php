@extends('layouts.app')

@section('title')
  User List | @parent
@endsection

@section('content')
  <div class="container mt-3">
    <div class="h2 text-center">User List</div>

    <div class="container pt-3 col-lg-7 justify-content-center">
      <table class="table">
        <thead class="thead">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
              <td>
                <a href="{{ route('user.show', [ 'user' => $user->id ]) }}">
                  {{ $user->name }}
                </a>
              </td>
              <td>{{ $user->email }}</td>
              <td>
                <form action="{{ route('user.destroy', [ 'user' => $user->id ]) }}" method="post">
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
        {{ $users->links() }}
      </div>
    </div>
  </div>
@endsection
