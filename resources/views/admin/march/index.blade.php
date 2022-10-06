@extends('admin.layout')

@section('march')
active
@endsection

@section('content')
<!-- Page Content  -->
<div class="container">
    <div class="row mb-3 text-start">
        <br>
        <table class="table table-striped table-hover mt-3">
            <thead class="text-start">
                <h2>March</h2>
                @if ($message = Session::get('success'))
                <div class="alert alert-success mt-2">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                    <a class="btn btn-primary" href="{{ route('marchs.create') }}"><b>Add +</b></a>
                </div>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ($march as $key => $marchs)
            <tbody>
                <td>{{ $march->firstItem() + $key  }}</td>
                <td>{{ $marchs->name }}</td>
                <td>
                    <img src="{{ asset('storage/' . $marchs->image) }}" alt="" style="width: 70px;">

                </td>
                <td>
                    <form action="{{ route('marchs.destroy',$marchs->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('marchs.edit',$marchs->id) }}">Edit</a>

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
            {{ $march->firstItem() }}
            to
            {{ $march->lastItem() }}
            of
            {{ $march->total() }}
            entries
        </div>
        <div class="d-flex justify-content-end">
            {{ $march->links() }}

        </div>
    </div>
</div>


@endsection