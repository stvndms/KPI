@extends('user.layout')

@section('november')
active
@endsection

@section('content')
<!-- Page Content  -->
<div class="container">
    <div class="row mb-3 text-start">
        <br>
        <table class="table table-striped table-hover mt-3">
            <thead class="text-start">
                <h2>November</h2>
                @if ($message = Session::get('success'))
                <div class="alert alert-success mt-2">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            @foreach ($nov as $key => $novs)
            <tbody>
                <td>{{ $nov->firstItem() + $key }}</td>
                <td>{{ $novs->name }}</td>
                <td>
                    <img src="{{ asset('storage/' . $novs->image) }}" alt="" style="width: 800px;">

                </td>
            </tbody>
            @endforeach
        </table>
        <div>
            Showing
            {{ $nov->firstItem() }}
            to
            {{ $nov->lastItem() }}
            of
            {{ $nov->total() }}
            entries
        </div>
        <div class="d-flex justify-content-end">
            {{ $nov->links() }}

        </div>
    </div>
</div>

@endsection