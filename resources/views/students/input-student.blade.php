@extends('layouts.master')

@section('content')

	<form action="{{url('/student')}}" method="POST" role="form">
		{{csrf_field()}}
		<legend>Input the student Id</legend>
	
		<div class="form-group">
			<label for="">Student Id</label>
			<input type="number" class="form-control" name="studentId" placeholder="The student Id">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Show Student</button>
	</form>

@endsection