@extends('layouts.admin')

@section('content')


<div class="container">
	<h3 class="col-md-5 text-center">Companies</h3>
	
	<table class="table">
		<thead>
			<tr>
				<td>Company Name</td>
				<td>Website</td>
				<td>Created</td>
				<td>Updated</td>
			</tr>
		</thead>
		
			@if($companies)
			@foreach($companies as $comp)
			<tbody>
			<td>{{$comp->comp_name}}</td>
			<td>{{$comp->website}}</td>
			<td>{{$comp->created_at ? $comp->created_at : 'N/A'}}</td>
			<td>{{$comp->updated_at ? $comp->updated_at : 'N/A'}}</td>
			
			</tbody>
			@endforeach
			
			@endif
		
	</table>
</div>
