@extends('layouts.master')

@section('content')

	<form action="{{url('/teacher/delete')}}" method="POST" role="form">
		{{csrf_field()}}
		<legend>Select the teacher Id</legend>
	
		<div class="form-group">
			<label for="">Teacher Id</label>
			<select class="form-control" name="teacherId" required="required">
				<option>Select a teacher</option>
				@foreach($teachers as $teacher)
					<option value="{{$teacher->id}}">{{$teacher->name}}</option>
				@endforeach
			</select>
		</div>
	
		<button type="submit" class="btn btn-primary">Delete Teacher</button>
	</form>

@endsection