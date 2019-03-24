@extends('layout')

@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<h1 class="title">Reservation</h1>
</div>
<form method="POST" class="reservationForm" action="{{url('/Reserve')}}">
	{{csrf_field()}}
	@foreach($restaurant as $r)
	<input type="hidden" name="restaurant_id" value="{{$r->restaurant_id}}">

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="col-sm-2 col-md-2 col-lg-2"></div>
		<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
			<label>Restaurant Name</label>
		</div>
		<div class="col-xs-8 col-sm-3 col-md-3 col-lg-3">
			<input type="hidden" name="restaurant_name" class="formText" value="{{$r->restaurant_name}}">
			<input type="text" class="formText" value="{{$r->restaurant_name}}" disabled="true">
		</div>
		<div class="col-sm-3 col-md-3 col-lg-3"></div>
		<div class="col-sm-2 col-md-2 col-lg-2"></div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="col-sm-2 col-md-2 col-lg-2"></div>
		<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
			<label>Restaurant Address</label>
		</div>
		<div class="col-xs-8 col-sm-6 col-md-6 col-lg-6">
			<textarea class="formText" disabled="true">{{$r->address}}</textarea>
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2"></div>
	</div>
	@endforeach

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="col-sm-2 col-md-2 col-lg-2"></div>
		<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
			<label>Name</label>
		</div>
		<div class="col-xs-8 col-sm-3 col-md-3 col-lg-3">
			<input type="text" name="name" class="formText" value="{{Auth::user()->name}}" required autofocus>
		</div>
		<div class="col-sm-3 col-md-3 col-lg-3"></div>
		<div class="col-sm-2 col-md-2 col-lg-2"></div>

		@if ($errors->has('name'))
			<span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
		@endif
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="col-sm-2 col-md-2 col-lg-2"></div>
		<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
			<label>Phone Number</label>
		</div>
		<div class="col-xs-8 col-sm-3 col-md-3 col-lg-3">
			<input type="text" name="phone" class="formText" value="{{Auth::user()->phone}}" required autofocus>
		</div>
		<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3"></div>
		<div class="col-sm-2 col-md-2 col-lg-2"></div>

		@if ($errors->has('phone'))
			<span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
		@endif
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="col-sm-2 col-md-2 col-lg-2"></div>
		<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
			<label>Address</label>
		</div>
		<div class="col-xs-8 col-sm-6 col-md-6 col-lg-6">
			<textarea class="formText" name="address" required autofocus>{{Auth::user()->address}}</textarea>
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2"></div>

		@if ($errors->has('address'))
			<span class="help-block">
                <strong>{{ $errors->first('address') }}</strong>
            </span>
		@endif
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="col-sm-2 col-md-2 col-lg-2"></div>
		<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
			<label>Reservation Time</label>
		</div>
		<div class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
			<input type="datetime-local" name="time" class="formText" required autofocus>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<a href="#popup-table" class="popup-link">Choose Table</a>
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2"></div>

		@if ($errors->has('time'))
			<span class="help-block">
                <strong>{{ $errors->first('time') }}</strong>
            </span>
		@endif
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8"></div>
		<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
	    	<input type="submit" class="btn btn-primary" value="Reserve" id="btnReserve">
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2"></div>
	</div>

	<div class="popup-wrapper" id="popup-table">
		<div class="popup-container">
			<a class="popup-close" href="#closed">X</a>
			@for($t=1;$t<=16;$t++)
			<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
				<div id="table{{$t}}" class="RestoTable" onclick="SetActive({{$t}})" >
					<input type="radio" name="table" value="{{$t}}" required autofocus>
					<label for="table{{$t}}" title="#{{$t}}">4 orang</label>
				</div>
			</div>
			@endfor
		</div>
	</div>
</form>

<script>
    function SetActive(table) {
        for (var i = 1; i <= 16; i++) {
            $('#table' + i).removeClass('active');
        }

        $('#table' + table).addClass('active');
    }
</script>
@endsection