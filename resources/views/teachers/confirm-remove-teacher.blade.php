@extends('layouts.master')

@section('content')

	<form action="{{url('/teacher/delete')}}" method="POST" role="form">
		{{csrf_field()}}
		{{method_field('DELETE')}}

		<legend>Delete a teacher</legend>

		<p>You are about to remove this teacher, please confirm.</p>

		<input type="hidden" name="id" value="{{$teacher->id}}">
	
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control" name="name" placeholder="The teacher name" required value="{{$teacher->name}}" disabled>
		</div>

		<div class="form-group">
			<label for="">Address</label>
			<input type="text" class="form-control" name="address" placeholder="The teacher address" required value="{{$teacher->address}}" disabled>
		</div>

		<div class="form-group">
			<label for="">Phone number</label>
			<input type="number" class="form-control" name="phone" placeholder="The teacher phone number" required value="{{$teacher->phone}}" disabled>
		</div>

		<div class="form-group">
			<label for="">Profession</label>
			<select name="profession" class="form-control" required disabled>
				<option>Select a profession</option>
				<option value="math" {{$teacher->profession == 'math' ? 'selected' : ''}}>Math</option>
				<option value="physics" {{$teacher->profession == 'physics' ? 'selected' : ''}}>Physics</option>
				<option value="engineering" {{$teacher->profession == 'engineering' ? 'selected' : ''}}>Engineering</option>
			</select>
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Delete Teacher</button>
	</form>

@endsection