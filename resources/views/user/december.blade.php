@extends('user.layout')

@section('december')
active
@endsection

@section('content')
<!-- Page Content  -->
<div class="container">
    <div class="row mb-3 text-start">
        <br>
        <table class="table table-striped table-hover mt-3">
            <thead class="text-start">
                <h2>December</h2>
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
            @foreach ($dec as $key => $decs)
            <tbody>
                <td>{{ $dec->firstItem() + $key }}</td>
                <td>{{ $decs->name }}</td>
                <td>
                    <img src="{{ asset('storage/' . $decs->image) }}" alt="" style="width: 800px;">

                </td>
            </tbody>
            @endforeach
        </table>
        <div>
            Showing
            {{ $dec->firstItem() }}
            to
            {{ $dec->lastItem() }}
            of
            {{ $dec->total() }}
            entries
        </div>
        <div class="d-flex justify-content-end">
            {{ $dec->links() }}

        </div>
    </div>
</div>

@endsection