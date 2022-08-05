@extends('admin.layout')

@section('january')
active
@endsection

@section('content')
<!-- Page Content  -->
<div class="container">
    <div class="row mb-3">
        <br>
        <table class="table table-striped table-hover mt-3">
            <thead class="text-start">
                <h2>January</h2>
                @if ($message = Session::get('success'))
                <div class="alert alert-success mt-2">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                    <a class="btn btn-primary" href="{{ route('januarys.create') }}"><b>Add +</b></a>
                </div>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Ach</th>
                    <th scope="col">%</th>
                    <th scope="col">Points</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ($january as $januarys)
            <tbody>
                <td>{{ ++$i }}</td>
                <td>{{ $januarys->name }}</td>
                <td>{{ $januarys->ach }}</td>
                <td>{{ $januarys->persen}}</td>
                <td>{{ $januarys->points}}</td>
                <td>
                    <form action="{{ route('januarys.destroy',$januarys->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('januarys.edit',$januarys->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tbody>
            @endforeach
        </table>
    </div>
</div>

@endsection