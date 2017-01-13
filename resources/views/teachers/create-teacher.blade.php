@extends('layouts.master')

@section('content')

	<form action="{{url('/teacher/create')}}" method="POST" role="form">
		{{csrf_field()}}
		<legend>Create a teacher</legend>
	
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control" name="name" placeholder="The teacher name" required>
		</div>

		<div class="form-group">
			<label for="">Address</label>
			<input type="text" class="form-control" name="address" placeholder="The teacher address" required>
		</div>

		<div class="form-group">
			<label for="">Phone number</label>
			<input type="number" class="form-control" name="phone" placeholder="The teacher phone number" required>
		</div>

		<div class="form-group">
			<label for="">Profession</label>
			<select name="profession" class="form-control" required=>
				<option>Select a profession</option>
				<option value="math">Math</option>
				<option value="physics">Physics</option>
				<option value="engineering">Engineering</option>
			</select>
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Create Teacher</button>
	</form>

@endsection