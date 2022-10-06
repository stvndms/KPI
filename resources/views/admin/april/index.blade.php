@extends('admin.layout')

@section('april')
active
@endsection

@section('content')
<!-- Page Content  -->
<div class="container">
    <div class="row mb-3 text-start">
        <br>
        <table class="table table-striped table-hover mt-3">
            <thead class="text-start">
                <h2>April</h2>
                @if ($message = Session::get('success'))
                <div class="alert alert-success mt-2">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                    <a class="btn btn-primary" href="{{ route('aprils.create') }}"><b>Add +</b></a>
                </div>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ($april as $key => $aprils)
            <tbody>
                <td>{{ $user->firsItem() + $key}}</td>
                <td>{{ $aprils->name }}</td>
                <td>
                    <img src="{{ asset('storage/' . $aprils->image) }}" alt="" style="width: 70px;">

                </td>
                <td>
                    <form action="{{ route('aprils.destroy',$aprils->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('aprils.edit',$aprils->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tbody>
            @endforeach
        </table>
        <div>
            Showing
            {{ $april->firstItem() }}
            to
            {{ $april->lastItem() }}
            of
            {{ $april->total() }}
            entries
        </div>
        <div class="d-flex justify-content-end">
            {{ $april->links() }}

        </div>
    </div>
</div>


@endsection