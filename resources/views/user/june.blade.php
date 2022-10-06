@extends('user.layout')

@section('june')
active
@endsection

@section('content')
<!-- Page Content  -->
<div class="container">
    <div class="row mb-3 text-start">
        <br>
        <table class="table table-striped table-hover mt-3">
            <thead class="text-start">
                <h2>June</h2>
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
            @foreach ($jun as $key => $juns)
            <tbody>
                <td>{{ $jun->firstItem() + $key }}</td>
                <td>{{ $juns->name }}</td>
                <td>
                    <img src="{{ asset('storage/' . $juns->image) }}" alt="" style="width: 800px;">

                </td>
            </tbody>
            @endforeach
        </table>
        <div>
            Showing
            {{ $jun->firstItem() }}
            to
            {{ $jun->lastItem() }}
            of
            {{ $jun->total() }}
            entries
        </div>
        <div class="d-flex justify-content-end">
            {{ $jun->links() }}

        </div>
    </div>
</div>

@endsection