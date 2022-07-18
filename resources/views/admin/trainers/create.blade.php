@extends('admin.layout')
@section('content')
   <div class="d-flex justify-content-between mb-3">
    <h6>Trainers /Add new</h6>
    <a class="btn btn-sm btn-primary" href="{{ route('admin.trainers.index') }}"> Back </a>
   </div>
   @include('admin.inc.errors')
<form method="post" action="{{ route('admin.trainers.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" class='from-control'>
    </div>
    <div class="form-group">
        <label for="">Phone</label>
        <input type="text" name="phone" class='from-control'>
    </div>
    <div class="form-group">
        <label for="">speciality</label>
        <input type="text" name="spec" class='from-control'>
    </div>
    <div class="form-group">
       
        <input type="file" name="img" class='from-control-file'>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection