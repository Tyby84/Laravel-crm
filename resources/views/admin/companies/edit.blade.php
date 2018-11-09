@extends('layouts.admin')
@section('content')

<div class="container">
<h3 class="text-center">Please create a Company</h3>
	<div class="col-md-5">
	{!! Form::model($companies,['method'=>'Post', '[action'=>'CompanyCtrl@update', $companies->id]]) !!}
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
		{!! Form::submit('Create Company',['class'=>'btn btn-primary']) !!}
	</div>

{!! Form::close() !!}
</div>

@endsection