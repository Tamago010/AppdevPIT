@extends('student_lists.layout')
@section('content')

<div class="card mx-4 my-5">
  <div class="card-header bg-info text-white">
    <h4>Edit Student</h4>
  </div>
  <div class="card-body">
    <form action="{{ url('student_lists/' . $student_lists->id) }}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")
      <input type="hidden" name="id" id="id" value="{{ $student_lists->id }}" />
      
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $student_lists->name }}" class="form-control" />
      </div>
      
      <div class="form-group">
        <label for="Address">Address</label>
        <input type="text" name="Address" id="Address" value="{{ $student_lists->address }}" class="form-control" />
      </div>
      
      <div class="form-group">
        <label for="PhoneNum">Phone Number</label>
        <input type="text" name="PhoneNum" id="PhoneNum" value="{{ $student_lists->mobile }}" class="form-control" />
      </div>
      
      <div class="form-group">
        <input type="submit" value="Update" class="btn btn-success" />
      </div>
    </form>
  </div>
</div>

@stop
