@extends('layouts.app')
@section('content')

<div class="container">
      <div class="row">
        <div class="col-8">
          <h2 class="mt-3">Tambah Data Played</h2>

          <form method="post" action="{{ url('played') }}">
            @csrf
            <div class="form-group">
              <label>ID ARTIST</label>
              <input type="text" class="form-control @error('played_artist_id') is-invalid @enderror" name="played_artist_id" id="played_artist_id" placeholder="Masukkan ID Artist">
              @error('played_artist_id')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label>ID ALBUM</label>
              <input type="text" class="form-control @error('played_album_id') is-invalid @enderror" name="played_album_id" id="played_album_id" placeholder="Masukkan ID Album">
              @error('played_album_id')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label>ID TRACK</label>
              <input type="text" class="form-control @error('played_track_id') is-invalid @enderror" name="played_track_id" id="played_track_id" placeholder="Masukkan ID Track">
              @error('played_track_id')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('played') }}" class="btn btn-danger">Kembali</a>
          </form>
        </div>
      </div>
    </div>

@endsection