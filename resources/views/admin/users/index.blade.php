@extends('admin.layout')

@section('user')
active
@endsection

@section('content')

<!-- Table -->
<div class="container">
    <div class="row mb-3">
        <br>
        <table class="table table-striped table-hover mt-3">
            <thead class="text-center">
                <h2>User</h2>
                @if ($message = Session::get('success'))
                <div class="alert alert-success mt-2">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                    <a class="btn btn-primary" href="{{ route('users.create') }}"><b>Add +</b></a>
                </div>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ($user as $users)
            <tbody>
                <td>{{ ++$i }}</td>
                <td>{{ $users->username }}</td>
                <td>{{ $users->password }}</td>
                <td>{{ $users->role}}</td>
                <td>
                    <form action="{{ route('users.destroy',$users->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('users.edit',$users->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
<!-- Table -->

@endsection