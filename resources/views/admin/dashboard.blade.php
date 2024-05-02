@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>

                    <div class="card-body">
                        Welcome to the admin dashboard!
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-3">
                    <a href="{{ route('users.create') }}" class="btn btn-success">Create User</a>
                </div>
                <div class="card">
                    <div class="card-header">User List</div>                    
                    <div class="card-body">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Role</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($users as $user)
                                  <tr>
                                      <td>{{ $user->id }}</td>
                                      <td>{{ $user->name }}</td>
                                      <td>{{ $user->email }}</td>
                                      <td>{{ $user->role }}</td>
                                      <td>
                                          <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-primary">Edit</a>
                                          <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                          </form>
                                      </td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
