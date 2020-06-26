@extends('layouts.app')
@section('content')

<div class="container">
      <div class="row">
        <div class="col-8">
          <h2 class="mt-3">Edit Data Artist</h2>

          <form method="post" action="{{ url('/artist/' . $row->artist_id) }}">
            <input name="_method" type="hidden" value="PATCH">
            @csrf
            <div class="form-group">
              <label for="nama">Nama Artist</label>
              <input type="text" class="form-control @error('artist_name') is-invalid @enderror" name="artist_name" id="artist_name" placeholder="Masukkan Nama" value="{{ $row->artist_name }}">
              @error('artist_name')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Ubah Data</button>
            <a href="{{ url('artist') }}" class="btn btn-danger">Kembali</a>
          </form>
        </div>
      </div>
    </div>
    
@endsection