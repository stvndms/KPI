@extends('admin.layout')

@section('nilai')
active
@endsection
@section('content')
<h2>Input Score</h2>
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

<form action="{{ route('januarys.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row mt-5">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <select class="form-control" name="name">
                    @foreach($user as $users)
                    <option value="{{$users->name}}">{{$users->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Ach:</strong>
                <input type="number" name="ach" class="form-control" placeholder="Ach">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>%:</strong>
                <input type="number" name="persen" class="form-control" placeholder="%">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Points:</strong>
                <input type="number" name="points" class="form-control" placeholder="Points">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

@endsection