@extends('layout')

@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<h1 class="title">Ongoing Reservation</h1>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<table class="dataTable stripe hover" id="table">
		<thead>
			<tr>
				<th>Restaurant Name</th>
				<th>Table</th>
				<th>Reservation Time</th>
				<th>On Behalf of</th>
				<th>Contact</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody id="tableContent">
			@foreach($rsv as $r)
				<tr>
					<td>{{$r->restaurant_name}}</td>
					<td>{{$r->table}}</td>
					<td>{{$r->reservation_time}}</td>
					<td>{{$r->on_behalf_of}}</td>
					<td>{{$r->phone}}</td>
					<td>{{$r->status}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#table').DataTable();
    });
</script>
@endsection