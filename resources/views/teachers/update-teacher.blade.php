@extends('layouts.master')

@section('content')

	<form action="{{url('/teacher/update')}}" method="POST" role="form">
		{{csrf_field()}}
		{{method_field('PUT')}}

		<legend>Update a teacher</legend>

		<input type="hidden" name="id" value="{{$teacher->id}}">
	
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control" name="name" placeholder="The teacher name" required value="{{$teacher->name}}">
		</div>

		<div class="form-group">
			<label for="">Address</label>
			<input type="text" class="form-control" name="address" placeholder="The teacher address" required value="{{$teacher->address}}">
		</div>

		<div class="form-group">
			<label for="">Phone number</label>
			<input type="number" class="form-control" name="phone" placeholder="The teacher phone number" required value="{{$teacher->phone}}">
		</div>

		<div class="form-group">
			<label for="">Profession</label>
			<select name="profession" class="form-control" required>
				<option>Select a profession</option>
				<option value="math" {{$teacher->profession == 'math' ? 'selected' : ''}}>Math</option>
				<option value="physics" {{$teacher->profession == 'physics' ? 'selected' : ''}}>Physics</option>
				<option value="engineering" {{$teacher->profession == 'engineering' ? 'selected' : ''}}>Engineering</option>
			</select>
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Update Teacher</button>
	</form>

@endsection