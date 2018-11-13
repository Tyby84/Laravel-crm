@extends('layouts.admin')
@section('content')

<div class="container">
<h3 class="text-center">Edit {{$employes->name}}</h3>
	<div class="col-md-5">
	{!! Form::model($employes,['method'=>'Patch', 'action'=>['EmployeCtrl@update', $employes->id]]) !!}
	{{csrf_field()}}
	
	<div class="form-group">
	{!! Form::label('name','Employee\'s name') !!}
	{!! Form::text('name',null,['class'=>'form-control']) !!}
	</div>
	
	
	<div class="form-group">
	{!! Form::label('location','Employee\'s location') !!}
	{!! Form::text('location',null,['class'=>'form-control']) !!}
	</div>
	
	<div class="form-group">
		{!! Form::submit('Update',['class'=>'btn btn-primary']) !!}
	</div>

{!! Form::close() !!}
	{!! Form::model($employes,['method'=>'Delete', 'action'=>['EmployeCtrl@destroy', $employes->id]]) !!}
	<div class="form-group">
		{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
	</div>
</div>

@endsection