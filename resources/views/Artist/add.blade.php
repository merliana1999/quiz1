@extends('layouts.app')
@section('content')

<div class="container">
      <div class="row">
        <div class="col-8">
          <h2 class="mt-3">Tambah Data Artist</h2>

          <form method="post" action="{{ url('artist') }}">
            @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control @error('artist_name') is-invalid @enderror" name="artist_name" id="artist_name" placeholder="Masukkan Nama">
              @error('artist_name')
              <div class="invalid-feedback">{{ $message}}</div>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('artist') }}" class="btn btn-danger">Kembali</a>
          </form>
        </div>
      </div>
    </div>

@endsection