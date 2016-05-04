@extends('admin/layout')
@section('content')
<div class="container">
	<div class="row">
		<legend>Hulpverleners</legend>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Price</th>
					<th>Duration</th>
					<th>Description</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($hulpverleners as $h)
				<tr>
					<td>{{ $h->voornaam }}</td>
					<td>{{ $h->achternaam }}</td>
					<td>{{ $h->hulpverlener_tijd.' hours' }}</td>
					<td>{{ $h->adres }}</td>
					<td><a href="{{ url('admin/edit-package/'.$p->id) }}" class="btn btn-primary">Edit</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
