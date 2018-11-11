@extends('layouts.admin')
@section('content')

<div class="container">
<h3 class="text-center">Edit {{$companies->comp_name}}</h3>
	<div class="col-md-5">
	{!! Form::model($companies,['method'=>'Patch', 'action'=>['CompanyCtrl@update', $companies->id]]) !!}
	{{csrf_field()}}
	
	<div class="form-group">
	{!! Form::label('comp_name','Company name') !!}
	{!! Form::text('comp_name',null,['class'=>'form-control']) !!}
	</div>
	
	
	<div class="form-group">
	{!! Form::label('website','Company website') !!}
	{!! Form::text('website',null,['class'=>'form-control']) !!}
	</div>
	
	<div class="form-group">
		{!! Form::submit('Update',['class'=>'btn btn-primary']) !!}
	</div>

{!! Form::close() !!}
{!! Form::model($companies,['method'=>'Delete', 'action'=>['CompanyCtrl@destroy', $companies->id]]) !!}
{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}

</div>

@endsection