@extends('layouts.app')
@section('content')

<div class="container">
      <div class="row">
        <div class="col-8">
          <h2 class="mt-3">Edit Data Track</h2>

          <form method="post" action="{{ url('/track/' . $row->id) }}">
            <input name="_method" type="hidden" value="PATCH">
            @csrf
            <div class="form-group">
              <label>ID Artist</label>
              <input type="text" class="form-control @error('track_artist_id') is-invalid @enderror" name="track_artist_id" id="track_artist_id" placeholder="Masukkan ID Artist" value="{{ $row->track_artist_id }}">
              @error('track_artist_id')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label>ID Album</label>
              <input type="text" class="form-control @error('track_album_id') is-invalid @enderror" name="track_album_id" id="track_album_id" placeholder="Masukkan ID Album" value="{{ $row->track_album_id }}">
              @error('track_album_id')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="nama">Nama Track</label>
              <input type="text" class="form-control @error('track_name') is-invalid @enderror" name="track_name" id="track_name" placeholder="Masukkan Nama Track" value="{{ $row->track_name }}">
              @error('track_name')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label>Time</label>
              <input type="text" class="form-control @error('track_time') is-invalid @enderror" name="track_time" id="track_time" placeholder="Masukkan Time" value="{{ $row->track_time }}">
              @error('track_time')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Ubah Data</button>
            <a href="{{ url('track') }}" class="btn btn-danger">Kembali</a>
          </form>
        </div>
      </div>
    </div>
    
@endsection