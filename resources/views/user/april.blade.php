@extends('user.layout')

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
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            @foreach ($apr as $key => $aprs)
            <tbody>
                <td>{{ $apr->firstItem() + $key }}</td>
                <td>{{ $aprs->name }}</td>
                <td>
                    <img src="{{ asset('storage/' . $aprs->image) }}" alt="" style="width: 800px;">

                </td>
            </tbody>
            @endforeach
        </table>
        <div>
            Showing
            {{ $apr->firstItem() }}
            to
            {{ $apr->lastItem() }}
            of
            {{ $apr->total() }}
            entries
        </div>
        <div class="d-flex justify-content-end">
            {{ $apr->links() }}

        </div>
    </div>
</div>

@endsection