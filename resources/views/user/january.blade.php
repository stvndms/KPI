@extends('user.layout')

@section('january')
active
@endsection

@section('content')
<!-- Page Content  -->
<div class="container">
    <div class="row mb-3 text-start">
        <br>
        <table class="table table-striped table-hover mt-3">
            <thead class="text-start">
                <h2>January</h2>
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
            @foreach ($jan as $key => $jans)
            <tbody>
                <td>{{ $jan->firstItem() + $key }}</td>
                <td>{{ $jans->name }}</td>
                <td>
                    <img src="{{ asset('storage/' . $jans->image) }}" alt="" style="width: 800px;">

                </td>
            </tbody>
            @endforeach
        </table>
        <div>
            Showing
            {{ $jan->firstItem() }}
            to
            {{ $jan->lastItem() }}
            of
            {{ $jan->total() }}
            entries
        </div>
        <div class="d-flex justify-content-end">
            {{ $jan->links() }}

        </div>
    </div>
</div>

@endsection