@extends('layouts.master')

@section('content')
	<ul class="list-group">
		<li class="list-group-item"><a href="{{url('/students')}}">Show all the Students</a></li>
		<li class="list-group-item"><a href="{{url('/teachers')}}">Show all the Teachers</a></li>
		<li class="list-group-item"><a href="{{url('/courses')}}">Show all the Courses</a></li>
	</ul>

	<ul class="list-group">
		<li class="list-group-item"><a href="{{url('/student')}}">Show a Specific Students</a></li>
		<li class="list-group-item"><a href="{{url('/teacher')}}">Show a Specific Teachers</a></li>
		<li class="list-group-item"><a href="{{url('/course')}}">Show a Specific Courses</a></li>
	</ul>

	<ul class="list-group">
		<li class="list-group-item"><a href="{{url('/student/create')}}">Create a new Student</a></li>
		<li class="list-group-item"><a href="{{url('/teacher/create')}}">Create a new Teacher</a></li>
		<li class="list-group-item"><a href="{{url('/teachers/courses/create')}}">Create a new Course</a></li>
	</ul>

	<ul class="list-group">
		<li class="list-group-item"><a href="{{url('/student/update')}}">Update a specific student</a></li>
		<li class="list-group-item"><a href="{{url('/teacher/update')}}">Update a specific Teacher</a></li>
	</ul>

	<ul class="list-group">
		<li class="list-group-item"><a href="{{url('/student/delete')}}">Delete a specific Student</a></li>
		<li class="list-group-item"><a href="{{url('/teacher/delete')}}">Delete a specific Teacher</a></li>
	</ul>

	<ul class="list-group">
		<li class="list-group-item"><a href="{{url('/courses/students')}}">Show the Students of a Course</a></li>
	</ul>

	<ul class="list-group">
		<li class="list-group-item"><a href="{{url('/teachers/courses')}}">Show the Courses of a Teacher</a></li>
	</ul>

	<ul class="list-group">
		<li class="list-group-item"><a href="{{url('/courses/students/add')}}">Add a Student to a Course</a></li>
	</ul>


@endsection