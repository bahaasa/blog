@extends('admin.layout')
@section('content')
   <div class="d-flex justify-content-between mb-3">
    <h6>Categories /Edit /{{ $trainer->name }}</h6>
    <a class="btn btn-sm btn-primary" href="{{ route('admin.trainers.index') }}"> Back </a>

   </div>
   @include('admin.inc.errors')
<form method="post" action="{{ route('admin.trainers.update') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $trainer->id }}">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" class='from-control' value="{{ $trainer->name }}">
    </div>
    <div class="form-group">
        <label for="">Phone</label>
        <input type="text" name="phone" class='from-control' value="{{ $trainer->phone }}">
    </div>
    <div class="form-group">
        <label for="">speciality</label>
        <input type="text" name="spec" class='from-control' value="{{ $trainer->spec }}">
    </div>
    <img src="{{ asset('uploads/trainers/'.$trainer->img) }}" height="100px" alt="">
    <div class="form-group">
       
        <input type="file" name="img" class='from-control-file'>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection