@extends('user.layout')

@section('august')
active
@endsection

@section('content')
<!-- Page Content  -->
<div class="container">
    <div class="row mb-3 text-start">
        <br>
        <table class="table table-striped table-hover mt-3">
            <thead class="text-start">
                <h2>August</h2>
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
            @foreach ($aug as $key => $augs)
            <tbody>
                <td>{{ $aug->firstItem() + $key }}</td>
                <td>{{ $augs->name }}</td>
                <td>
                    <img src="{{ asset('storage/' . $augs->image) }}" alt="" style="width: 800px;">

                </td>
            </tbody>
            @endforeach
        </table>
        <div>
            Showing
            {{ $aug->firstItem() }}
            to
            {{ $aug->lastItem() }}
            of
            {{ $aug->total() }}
            entries
        </div>
        <div class="d-flex justify-content-end">
            {{ $aug->links() }}

        </div>
    </div>
</div>

@endsection