@extends('BaseTemplate.main')
@section('halaman', 'Tambah Data')
@section('content')
    <form class="form-register w-50 center border rounded px-3 py-3 mx-auto mt-5"action="/library" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Register Form</h1>
      <div class="form-floating">
        <input type="text" class="form-control" name="judul" id="judul" placeholder="judul" >
        <label for="judul">Judul</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" name="jenis" id="jenis" placeholder="jenis" >
        <label for="jenis">Jenis</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" name="halaman" id="halaman" placeholder="halaman" >
        <label for="halaman">Halaman</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" name="penulis" id="penulis" placeholder="penulis" >
        <label for="penulis">Penulis</label>
      </div>
      <div>
        <button type = "submit" class="btn btn-primary mt-2">Tambah</button>
      </div>
    </form>   
    <a href="/library">
      <button class="btn btn-warning text-white mt-2">Back</button>
    </a>

@endsection