@extends('user.layout')

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
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            @foreach ($sep as $key => $seps)
            <tbody>
                <td>{{ $sep->firstItem() + $key }}</td>
                <td>{{ $seps->name }}</td>
                <td>
                    <img src="{{ asset('storage/' . $seps->image) }}" alt="" style="width: 800px;">

                </td>
            </tbody>
            @endforeach
        </table>
        <div>
            Showing
            {{ $sep->firstItem() }}
            to
            {{ $sep->lastItem() }}
            of
            {{ $sep->total() }}
            entries
        </div>
        <div class="d-flex justify-content-end">
            {{ $sep->links() }}

        </div>
    </div>
</div>

@endsection