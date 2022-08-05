@extends('admin.layout')

@section('edit')
active
@endsection

@section('content')
<br>
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('januarys.update',$january->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    @method('PUT')
    <h2>Edit</h2>
    <div class="row mt-5">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name', $january->name) }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Ach:</strong>
                <input type="number" name="ach" class="form-control" placeholder="Ach" value="{{ old('ach', $january->ach) }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>%:</strong>
                <input type="number" name="persen" class="form-control" placeholder="%" value="{{ old('persen', $january->persen) }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Points:</strong>
                <input type="number" name="points" class="form-control" placeholder="Points" value="{{ old('points', $january->points) }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection