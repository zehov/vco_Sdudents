@extends('layouts.master')

@section('title', 'Courses')
@section('style')

<link rel="stylesheet" type="text/css" href="">

@endsection

@section('content')
<div class="container">
<div class="row">
	<div class="col-md-6">
		<h1>Courses</h1>
	</div>	
</div>
<div class="row">
<table class="table">
	<tr>
		<td>
			Course name
		</td>
		<td>
			Course duration
		</td>
		<td>
			discription
		</td>
		<td>
			Edit course
		</td>
		<td>
			Delete course
		</td>
	</tr>
	@foreach($courses as $course)
	<tr>
		<td>
			<a href="#">
				{{ $course->name }}				
			</a>			
		</td>
		<td>
			{{ $course->duration }}
		</td>
		
		<td>
			{{ $course->description }}
		</td>
		<td>
			<a href="{{ route('edit_course_info', $course->id) }}" class="btn btn-info">Edit</a>
		</td>
		<td>
			Delete</a>
		</td>
	</tr>
@endforeach
</table>
<div class="row">
	<div class="col-md-6">
		<a href="{{ route('add_new_course') }}" class="btn btn-info">Add New Course</a>
	</div>
</div>
</div>
</div>
@endsection