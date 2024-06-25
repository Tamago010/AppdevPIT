@extends('student_lists.layout')
@section('content')
  
<div class="card mx-4 my-5 shadow-lg">
  <div class="card-header bg-primary text-white">
    <h2>Create New Student</h2>
  </div>
  <div class="card-body">
    <form action="{{ url('student_lists') }}" method="post">
      {!! csrf_field() !!}
      <div class="form-group mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
      </div>
      <div class="form-group mb-3">
        <label for="Address" class="form-label">Address</label>
        <input type="text" name="Address" id="Address" class="form-control" required>
      </div>
      <div class="form-group mb-3">
        <label for="PhoneNum" class="form-label">Phone Number</label>
        <input type="text" name="PhoneNum" id="PhoneNum" class="form-control" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Save" class="btn btn-success">
      </div>
    </form>
  </div>
</div>
  
@stop
