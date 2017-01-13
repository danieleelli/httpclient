@extends('layouts.master')

@section('content')

	<form action="{{url('/teacher')}}" method="POST" role="form">
		{{csrf_field()}}
		<legend>Input the teacher Id</legend>
	
		<div class="form-group">
			<label for="">Teacher Id</label>
			<input type="number" class="form-control" name="teacherId" placeholder="The teacher Id">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Show Teacher</button>
	</form>

@endsection