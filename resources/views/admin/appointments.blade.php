@extends('admin/layout')
@section('content')
<div class="col-lg-8">
	<div id="error"></div>
	<div id="calendar"></div>
</div>
<div class="col-lg-4">
	<legend> Details </legend>
	<div id="appointment-details">
		<p>Klik op een afspraak voor meer details</p>
	</div>
</div>

<script src="{{ asset('/js/admin/appointments.js') }}"></script>
@endsection
