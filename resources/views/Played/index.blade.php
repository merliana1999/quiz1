@extends('layouts.app')
@section('content')

<div class="container">
	<h3>Data Played</h3>
    <a href="{{ url('played/create') }}" class="btn btn-primary my-3">Tambah Data</a>


	<table class="table">
		<thead class="thead-dark">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">ARTIST ID</th>
			<th scope="col">ALBUM ID</th>
			<th scope="col">TRACK ID</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->played_artist_id }}</td>
			<td>{{ $row->played_album_id }}</td>
			<td>{{ $row->played_track_id }}</td>
			<td>
				<a href="{{ url('played/' . $row->id . '/edit')}}" class="badge badge-success">EDIT</a>
				
				<form action="{{ url('played/' . $row->id)}}" method="post" class="d-inline">
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