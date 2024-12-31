@extends('layout.main')
@section('container')
  <form method="post" action="/history" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="form-label" for="basic-form-nama">Nama</label>
      <input class="form-control" id="basic-form-nama" id="nama" name="nama" type="text" placeholder="Nama Project"/>
    </div>
    <div class="mb-3">
      <label class="form-label" for="basic-form-alamat">Alamat</label>
      <input class="form-control" id="basic-form-alamat" name="alamat" id="alamat" type="text" placeholder="Alamat" />
    </div>
    <div class="mb-3">
      <label class="form-label" for="basic-form-dob">Tanggal</label>
      <input class="form-control" id="basic-form-dob" name="tanggal" id="tanggal" type="date" />
    </div>
    <div class="mb-3">
      <label class="form-label">Upload Image</label>
      <input class="form-control" type="file"  name="foto" id="foto"/>
    </div>
    <div class="mb-3">
      <label class="form-label" for="basic-form-textarea">Deskripsi</label>
      <textarea class="form-control" id="basic-form-textarea" rows="3" placeholder="Description" name="deskripsi" id="deskripsi"></textarea>
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
  </form>
@endsection