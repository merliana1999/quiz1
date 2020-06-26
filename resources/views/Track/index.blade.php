@extends('layouts.app')
@section('content')

<div class="container">
	<h3>Data Track</h3>
    <a href="{{ url('track/create') }}" class="btn btn-primary my-3">Tambah Data</a>


	<table class="table">
		<thead class="thead-dark">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">ARTIST ID</th>
			<th scope="col">ALBUM ID</th>
			<th scope="col">NAMA TRACK</th>
			<th scope="col">TIME</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->track_artist_id }}</td>
			<td>{{ $row->track_album_id }}</td>
			<td>{{ $row->track_name }}</td>
			<td>{{ $row->track_time }}</td>
			<td>
				<a href="{{ url('track/' . $row->id . '/edit')}}" class="badge badge-success">EDIT</a>
				
				<form action="{{ url('track/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="badge badge-danger">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection