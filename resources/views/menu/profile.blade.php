@extends('layout')

@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<h1 class="title">Profile</h1>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="col-sm-2 col-md-2 col-lg-2"></div>
	<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
		<label>ID</label>
	</div>
	<div class="col-xs-8 col-sm-3 col-md-3 col-lg-3">
		<label>{{Auth::user()->id}}</label>
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"></div>
	<div class="col-sm-2 col-md-2 col-lg-2"></div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="col-sm-2 col-md-2 col-lg-2"></div>
	<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
		<label>Name</label>
	</div>
	<div class="col-xs-8 col-sm-3 col-md-3 col-lg-3">
		<label>{{Auth::user()->name}}</label>
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"></div>
	<div class="col-sm-2 col-md-2 col-lg-2"></div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="col-sm-2 col-md-2 col-lg-2"></div>
	<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
		<label>Phone Number</label>
	</div>
	<div class="col-xs-8 col-sm-3 col-md-3 col-lg-3">
		<label>{{Auth::user()->phone}}</label>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3"></div>
	<div class="col-sm-2 col-md-2 col-lg-2"></div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="col-sm-2 col-md-2 col-lg-2"></div>
	<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
		<label>Address</label>
	</div>
	<div class="col-xs-8 col-sm-6 col-md-6 col-lg-6">
		<label>{{Auth::user()->address}}</label>
	</div>
	<div class="col-sm-2 col-md-2 col-lg-2"></div>
</div>
@endsection