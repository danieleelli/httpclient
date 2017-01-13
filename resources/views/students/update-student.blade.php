@extends('layouts.master')

@section('content')

	<form action="{{url('/student/update')}}" method="POST" role="form">
		{{csrf_field()}}
		{{method_field('PUT')}}

		<legend>Update a student</legend>

		<input type="hidden" name="id" value="{{$student->id}}">
	
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control" name="name" placeholder="The student name" required value="{{$student->name}}">
		</div>

		<div class="form-group">
			<label for="">Address</label>
			<input type="text" class="form-control" name="address" placeholder="The student address" required value="{{$student->address}}">
		</div>

		<div class="form-group">
			<label for="">Phone number</label>
			<input type="number" class="form-control" name="phone" placeholder="The student phone number" required value="{{$student->phone}}">
		</div>

		<div class="form-group">
			<label for="">Career</label>
			<select name="career" class="form-control" required>
				<option>Select a career</option>
				<option value="math" {{$student->career == 'math' ? 'selected' : ''}}>Math</option>
				<option value="physics" {{$student->career == 'physics' ? 'selected' : ''}}>Physics</option>
				<option value="engineering" {{$student->career == 'engineering' ? 'selected' : ''}}>Engineering</option>
			</select>
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Update Student</button>
	</form>

@endsection