@extends('user.layout')

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
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            @foreach ($mar as $key => $mars)
            <tbody>
                <td>{{ $mar->firstItem() + $key }}</td>
                <td>{{ $mars->name }}</td>
                <td>
                    <img src="{{ asset('storage/' . $mars->image) }}" alt="" style="width: 800px;">

                </td>
            </tbody>
            @endforeach
        </table>
        <div>
            Showing
            {{ $mar->firstItem() }}
            to
            {{ $mar->lastItem() }}
            of
            {{ $mar->total() }}
            entries
        </div>
        <div class="d-flex justify-content-end">
            {{ $mar->links() }}

        </div>
    </div>
</div>

@endsection