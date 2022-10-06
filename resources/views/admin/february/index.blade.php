@extends('admin.layout')

@section('february')
active
@endsection

@section('content')
<!-- Page Content  -->
<div class="container">
    <div class="row mb-3 text-start">
        <br>
        <table class="table table-striped table-hover mt-3">
            <thead class="text-start">
                <h2>February</h2>
                @if ($message = Session::get('success'))
                <div class="alert alert-success mt-2">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                    <a class="btn btn-primary" href="{{ route('februarys.create') }}"><b>Add +</b></a>
                </div>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ($february as $key => $februarys)
            <tbody>
                <td>{{ $february->firstItem() + $key}}</td>
                <td>{{ $februarys->name }}</td>
                <td>
                    <img src="{{ asset('storage/' . $februarys->image) }}" alt="" style="width: 70px;">

                </td>
                <td>
                    <form action="{{ route('februarys.destroy',$februarys->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('februarys.edit',$februarys->id) }}">Edit</a>

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
            {{ $february->firstItem() }}
            to
            {{ $february->lastItem() }}
            of
            {{ $february->total() }}
            entries
        </div>
        <div class="d-flex justify-content-end">
            {{ $february->links() }}

        </div>
    </div>
</div>


@endsection