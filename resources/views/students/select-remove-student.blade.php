@extends('layouts.master')

@section('content')

	<form action="{{url('/student/delete')}}" method="POST" role="form">
		{{csrf_field()}}
		<legend>Select the student Id</legend>
	
		<div class="form-group">
			<label for="">Student Id</label>
			<select class="form-control" name="studentId" required="required">
				<option>Select a student</option>
				@foreach($students as $student)
					<option value="{{$student->id}}">{{$student->name}}</option>
				@endforeach
			</select>
		</div>
	
		<button type="submit" class="btn btn-primary">Delete Student</button>
	</form>

@endsection