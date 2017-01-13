@extends('layouts.master')

@section('content')

	<form action="{{url('/course')}}" method="POST" role="form">
		{{csrf_field()}}
		<legend>Input the course Id</legend>
	
		<div class="form-group">
			<label for="">Course Id</label>
			<input type="number" class="form-control" name="courseId" placeholder="The course Id">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Show Course</button>
	</form>

@endsection