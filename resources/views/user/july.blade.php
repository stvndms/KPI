@extends('user.layout')

@section('july')
active
@endsection

@section('content')
<!-- Page Content  -->
<div class="container">
    <div class="row mb-3 text-start">
        <br>
        <table class="table table-striped table-hover mt-3">
            <thead class="text-start">
                <h2>July</h2>
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
            @foreach ($jul as $key => $juls)
            <tbody>
                <td>{{ $jul->firstItem() + $key }}</td>
                <td>{{ $juls->name }}</td>
                <td>
                    <img src="{{ asset('storage/' . $juls->image) }}" alt="" style="width: 800px;">

                </td>
            </tbody>
            @endforeach
        </table>
        <div>
            Showing
            {{ $jul->firstItem() }}
            to
            {{ $jul->lastItem() }}
            of
            {{ $jul->total() }}
            entries
        </div>
        <div class="d-flex justify-content-end">
            {{ $jul->links() }}

        </div>
    </div>
</div>

@endsection