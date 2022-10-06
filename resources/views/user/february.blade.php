@extends('user.layout')

@section('february')
active
@endsection

@section('content')
<!-- Page Content  -->
<div class="container">
    <div class="row mb-3 text-start">
        <br>
        <table class="table table-striped table-hover mt-3">
            <thead class="text-start">
                <h2>February</h2>
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
            @foreach ($feb as $key => $febs)
            <tbody>
                <td>{{ $feb->firstItem() + $key }}</td>
                <td>{{ $febs->name }}</td>
                <td>
                    <img src="{{ asset('storage/' . $febs->image) }}" alt="" style="width: 800px;">

                </td>
            </tbody>
            @endforeach
        </table>
        <div>
            Showing
            {{ $feb->firstItem() }}
            to
            {{ $feb->lastItem() }}
            of
            {{ $feb->total() }}
            entries
        </div>
        <div class="d-flex justify-content-end">
            {{ $feb->links() }}

        </div>
    </div>
</div>

@endsection