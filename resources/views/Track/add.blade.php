@extends('layouts.app')
@section('content')

<div class="container">
      <div class="row">
        <div class="col-8">
          <h2 class="mt-3">Tambah Data Track</h2>

          <form method="post" action="{{ url('track') }}">
            @csrf
            <div class="form-group">
              <label>ID ARTIST</label>
              <input type="text" class="form-control @error('track_artist_id') is-invalid @enderror" name="track_artist_id" id="track_artist_id" placeholder="Masukkan ID Artist">
              @error('track_artist_id')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label>ID ALBUM</label>
              <input type="text" class="form-control @error('track_album_id') is-invalid @enderror" name="track_album_id" id="track_album_id" placeholder="Masukkan ID Album">
              @error('track_album_id')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="nama">Nama Track</label>
              <input type="text" class="form-control @error('track_name') is-invalid @enderror" name="track_name" id="track_name" placeholder="Masukkan Nama Track">
              @error('track_name')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label>TIME</label>
              <input type="text" class="form-control @error('track_time') is-invalid @enderror" name="track_time" id="track_time" placeholder="Masukkan Time">
              @error('track_time')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('track') }}" class="btn btn-danger">Kembali</a>
          </form>
        </div>
      </div>
    </div>

@endsection