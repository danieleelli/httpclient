@extends('layouts.master')

@section('content')

	<form action="{{url('/courses/students')}}" method="POST" role="form">
		{{csrf_field()}}
		<legend>Select the Course</legend>
	
		<div class="form-group">
			<label for="">Course</label>
			<select class="form-control" name="courseId" required>
				<option>Select a course</option>
				@foreach($courses as $course)
					<option value="{{$course->id}}">{{$course->title}}</option>
				@endforeach
			</select>
		</div>
	
		<button type="submit" class="btn btn-primary">Select Course</button>
	</form>

@endsection