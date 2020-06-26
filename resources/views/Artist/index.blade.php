@extends('layouts.app')
@section('content')

<div class="container">
	<h3>Data Artis</h3>
    <a href="{{ url('artist/create') }}" class="btn btn-primary my-3">Tambah Data</a>


	<table class="table">
		<thead class="thead-dark">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">NAMA ARTIS</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->artist_id }}</td>
			<td>{{ $row->artist_name }}</td>
			<td>
				<a href="{{ url('artist/' . $row->artist_id . '/edit')}}" class="badge badge-success">EDIT</a>
				
				<form action="{{ url('artist/' . $row->artist_id)}}" method="post" class="d-inline">
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