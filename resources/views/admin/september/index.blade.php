@extends('admin.layout')

@section('september')
active
@endsection

@section('content')
<!-- Page Content  -->
<div class="container">
    <div class="row mb-3 text-start">
        <br>
        <table class="table table-striped table-hover mt-3">
            <thead class="text-start">
                <h2>September</h2>
                @if ($message = Session::get('success'))
                <div class="alert alert-success mt-2">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                    <a class="btn btn-primary" href="{{ route('septembers.create') }}"><b>Add +</b></a>
                </div>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ($september as $key => $septembers)
            <tbody>
                <td>{{ $september->firstItem() + $key }}</td>
                <td>{{ $septembers->name }}</td>
                <td>
                    <img src="{{ asset('storage/' . $septembers->image) }}" alt="" style="width: 70px;">

                </td>
                <td>
                    <form action="{{ route('septembers.destroy',$septembers->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('septembers.edit',$septembers->id) }}">Edit</a>

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
            {{ $september->firstItem() }}
            to
            {{ $september->lastItem() }}
            of
            {{ $september->total() }}
            entries
        </div>
        <div class="d-flex justify-content-end">
            {{ $september->links() }}

        </div>
    </div>
</div>


@endsection