@extends('user.layout')

@section('may')
active
@endsection

@section('content')
<!-- Page Content  -->
<div class="container">
    <div class="row mb-3 text-start">
        <br>
        <table class="table table-striped table-hover mt-3">
            <thead class="text-start">
                <h2>May</h2>
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
            @foreach ($may as $key => $mays)
            <tbody>
                <td>{{ $may->firstItem() + $key }}</td>
                <td>{{ $mays->name }}</td>
                <td>
                    <img src="{{ asset('storage/' . $mays->image) }}" alt="" style="width: 800px;">

                </td>
            </tbody>
            @endforeach
        </table>
        <div>
            Showing
            {{ $may->firstItem() }}
            to
            {{ $may->lastItem() }}
            of
            {{ $may->total() }}
            entries
        </div>
        <div class="d-flex justify-content-end">
            {{ $may->links() }}

        </div>
    </div>
</div>

@endsection