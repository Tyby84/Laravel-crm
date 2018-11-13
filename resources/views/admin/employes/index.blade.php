@extends('layouts.admin')

@section('content')


<div class="container">
	<h3 class="col-md-offset-4 col-md-4 text-center">Employes</h3>
	<div class="row"></div>
	<hr class="hr col-md-offset-4 col-md-4 text-center">
	
	<table class="table">
		<thead>
			<tr>
				<td><strong>Employee</strong></td>
				<td><strong>Location</strong></td>
				<td><strong>Created</strong></td>
				<td><strong>Updated</strong></td>
				<td><strong>Create</strong></td>
				<td><strong>Edit</strong></td>
				<td><strong>Delete</strong></td>
			</tr>
		</thead>
		@if($employes)
			@foreach($employes as $emp)
				<tbody>
					<tr>
						<td>{{$emp->name}}</td>
						<td>{{$emp->location}}</td>
						<td>{{$emp->created_at}}</td>
						<td>{{$emp->updated_at}}</td>
						<td><a href="">Create</a></td>
						<td><a class="btn btn-info" href="{{route('admin.employes.edit', $emp->id)}}">Edit</a></td>
						<td><a class="btn btn-danger" href="{{route('admin.employes.edit', $emp->id)}}">Delete</a></td>
					</tr>
				</tbody>
			@endforeach
		@endif
	</table>
	@endsection