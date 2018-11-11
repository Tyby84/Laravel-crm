@extends('layouts.admin')

@section('content')


<div class="container">
	<h3 class="col-md-offset-4 col-md-4 text-center">Companies</h3>
	<div class="row"></div>
	<hr class="hr col-md-offset-4 col-md-4 text-center">
	
	<table class="table">
		<thead>
			<tr>
				<td><strong>Company Name</strong></td>
				<td><strong>Website</strong></td>
				<td><strong>Created</strong></td>
				<td><strong>Updated</strong></td>
				<td><strong>Create</strong></td>
				<td><strong>Edit</strong></td>
				<td><strong>Delete</strong></td>
			</tr>
		</thead>
		
			@if($companies)
			@foreach($companies as $comp)
			<tbody>
			<td>{{$comp->comp_name}}</td>
			<td>{{$comp->website}}</td>
			<td>{{$comp->created_at ? $comp->created_at : 'N/A'}}</td>
			<td>{{$comp->updated_at ? $comp->updated_at : 'N/A'}}</td>
			<td><a class="btn btn-info" href="{{route('admin.companies.create')}}">create</a></td>
			<td><a class="btn btn-primary" href="{{route('admin.companies.edit', $comp->id)}}">Edit</a></td>
			<td><a class="btn btn-danger" href="{{route('admin.companies.edit', $comp->id)}}">Delete</a></td>
			</tbody>
			@endforeach
			
			@endif
		
	</table>
</div>
