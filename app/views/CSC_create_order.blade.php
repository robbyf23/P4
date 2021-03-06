@extends ('_master')
@section ('title')
CSC, LLC.  Create Order
@stop
@section ('header')
@stop
@section ('navigation')
<!--************************************************
	This is the breadcrumb navigation code to be
	included by the _master blade template.
	************************************************-->
<a href="/">Home</a>
@stop
@section ('page_title')
@if(Session::get('flash_message'))
	<div class="flash-message">{{ Session::get('flash_message') }}</div>
@endif
<h2>Create Order</h2>
@stop
@section ('description')
This page is used to create an order for a CSC client.
@stop
@section ('content')
@foreach($errors->all() as $message) 
    <div class="error">{{ $message }}</div>
@endforeach

<form action="{{ url('create-order') }}" method="post">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<label for="client">Client:</label>
	{{ Form::select('Client', $client_options , Input::old('Client')) }}
	<label for="service">Service:</label>
	{{ Form::select('Service', $service_options , Input::old('Service')) }}
	<input class="select_button" type="submit" value="Submit" />
</form>
@stop