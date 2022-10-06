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

<form action="{{ route('julys.update',$july->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    @method('PUT')
    <h2>Edit</h2>
    <div class="row mt-5">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <select class="form-control" name="name">
                    @foreach($user as $users)
                    <option value="{{$users->name}}" @if($july->name == $users->name)selected @endif>{{$users->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Input Image</label>
            <input type="hidden" name="oldImage" value="{{ $july->image }}">
            <img class="img-preview img-fluid mb-3 col-sm-4">
            <input class="form-control" type="file" name="image" id="image" onchange="previewImage()">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

<script>
    function previewImage() {

        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview')
        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection