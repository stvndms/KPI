@extends('user.layout')

@section('october')
active
@endsection

@section('content')
<!-- Page Content  -->
<div class="container">
    <div class="row mb-3 text-start">
        <br>
        <table class="table table-striped table-hover mt-3">
            <thead class="text-start">
                <h2>October</h2>
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
            @foreach ($oct as $key => $octs)
            <tbody>
                <td>{{ $oct->firstItem() + $key }}</td>
                <td>{{ $octs->name }}</td>
                <td>
                    <img src="{{ asset('storage/' . $octs->image) }}" alt="" style="width: 800px;">

                </td>
            </tbody>
            @endforeach
        </table>
        <div>
            Showing
            {{ $oct->firstItem() }}
            to
            {{ $oct->lastItem() }}
            of
            {{ $oct->total() }}
            entries
        </div>
        <div class="d-flex justify-content-end">
            {{ $oct->links() }}

        </div>
    </div>
</div>

@endsection