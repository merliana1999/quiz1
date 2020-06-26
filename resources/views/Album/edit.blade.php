@extends('layouts.app')
@section('content')

<div class="container">
      <div class="row">
        <div class="col-8">
          <h2 class="mt-3">Edit Data Album</h2>

          <form method="post" action="{{ url('/album/' . $row->id) }}">
            <input name="_method" type="hidden" value="PATCH">
            @csrf
            <div class="form-group">
              <label>ID Artist</label>
              <input type="text" class="form-control @error('album_artist_id') is-invalid @enderror" name="album_artist_id" id="album_artist_id" placeholder="Masukkan ID Artist" value="{{ $row->album_artist_id }}">
              @error('album_artist_id')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="nama">Nama Album</label>
              <input type="text" class="form-control @error('album_name') is-invalid @enderror" name="album_name" id="album_name" placeholder="Masukkan Nama Album" value="{{ $row->album_name }}">
              @error('album_name')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Ubah Data</button>
            <a href="{{ url('album') }}" class="btn btn-danger">Kembali</a>
          </form>
        </div>
      </div>
    </div>
    
@endsection