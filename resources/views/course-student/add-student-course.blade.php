@extends('layouts.master')

@section('content')

	<form action="{{url('/courses/students/add')}}" method="POST" role="form">
		{{csrf_field()}}
		<legend>Add Student to a Course</legend>
	
		<div class="form-group">
			<label for="">Course</label>
			<select name="courseId" class="form-control" required>
				<option>Select a course</option>
				@foreach($courses as $course)
					<option value="{{$course->id}}">{{$course->title}}</option>
				@endforeach

			</select>
		</div>

		<div class="form-group">
			<label for="">Student</label>
			<select name="studentId" class="form-control" required>
				<option>Select a student</option>
				@foreach($students as $student)
					<option value="{{$student->id}}">{{$student->name}}</option>
				@endforeach

			</select>
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Save</button>
	</form>

@endsection