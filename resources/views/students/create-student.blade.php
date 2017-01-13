@extends('layouts.master')

@section('content')

	<form action="{{url('/student/create')}}" method="POST" role="form">
		{{csrf_field()}}
		<legend>Create a student</legend>
	
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control" name="name" placeholder="The student name" required>
		</div>

		<div class="form-group">
			<label for="">Address</label>
			<input type="text" class="form-control" name="address" placeholder="The student address" required>
		</div>

		<div class="form-group">
			<label for="">Phone number</label>
			<input type="number" class="form-control" name="phone" placeholder="The student phone number" required>
		</div>

		<div class="form-group">
			<label for="">Career</label>
			<select name="career" class="form-control" required=>
				<option>Select a career</option>
				<option value="math">Math</option>
				<option value="physics">Physics</option>
				<option value="engineering">Engineering</option>
			</select>
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Create Student</button>
	</form>

@endsection