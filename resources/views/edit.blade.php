@extends('BaseTemplate.main')
@section('halaman', 'Edit Data')
@section('content')
<form class="form-register w-50 center border rounded px-3 py-3 mx-auto mt-5" action="/library/{{$data->id}}" method="post" >
  @method('put')
  @csrf
  <h1 class="h3 mb-3 fw-normal">Edit Form</h1>
      <div class="form-floating">
        <input type="text" class="form-control" name="judul" value="{{$data->judul}}" id="judul" placeholder="judul" required>
        <label for="judul"></label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" name="jenis" value="{{$data->jenis}}" id="jenis" placeholder="jenis" required>
        <label for="jenis">Jenis</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" name="halaman" value="{{$data->halaman}}" id= "halaman" placeholder="halaman" required>
        <label for="halaman">Halaman</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" name="penulis" value="{{$data->penulis}}"  id="penulis" placeholder="penulis" required>
        <label for="penulis">Penulis</label>
      </div>
      <div>
        <button type = "submit" class="btn btn-primary mt-2" onclick="return confirm('Apakah anda sudah yakin dengan perubahan tersebut?')">Simpan</button>
      </div>
    </form>
    <div>
    <a href="/library" class="container">
      <button class="btn btn-warning text-white mt-2">Cancel</button> 
    </a>
  </div>
@endsection