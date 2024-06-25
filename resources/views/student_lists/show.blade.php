@extends('student_lists.layout')
@section('content')

<div class="card mx-4 my-5">
    <div class="card-header bg-primary text-white">
        <h4>Student Details</h4>
    </div>
    <div class="card-body">
        <h5 class="card-title">Name: {{ $student_lists->name }}</h5>
        <p class="card-text"><strong>Address:</strong> {{ $student_lists->Address }}</p>
        <p class="card-text"><strong>Phone Number:</strong> {{ $student_lists->PhoneNum }}</p>
    </div>
</div>

@endsection
