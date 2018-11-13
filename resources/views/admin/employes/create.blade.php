@extends('layouts.admin')
@section('content')

<div class="container">
<h3 class="text-center">Please create an Employee</h3>
	<div class="col-md-5">
	{!! Form::open(['method'=>'Post', 'action'=>'EmployeCtrl@store', 'file'=>true]) !!}
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
		{!! Form::submit('Create Employee',['class'=>'btn btn-primary']) !!}
	</div>

{!! Form::close() !!}
</div>

@endsection