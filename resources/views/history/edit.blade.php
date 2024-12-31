@extends('layout.main')
@section('container')
<form method="post" action="/history/{{ $history->id }}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
        <label class="form-label" for="basic-form-nama">Nama</label>
        <input class="form-control" id="basic-form-nama" name="nama" type="text" value="{{ old('nama', $history->nama) }}" placeholder="Nama Project"/>
    </div>
    <div class="mb-3">
        <label class="form-label" for="basic-form-alamat">Alamat</label>
        <input class="form-control" id="basic-form-alamat" name="alamat" type="text" value="{{ old('alamat', $history->alamat) }}" placeholder="Alamat" />
    </div>
    <div class="mb-3">
        <label class="form-label" for="basic-form-dob">Tanggal</label>
        <input class="form-control" id="basic-form-dob" name="tanggal" type="date" value="{{ old('tanggal', $history->tanggal) }}" />
    </div>
    @if ($history->foto)
    <div class="mb-3">
        <img src="{{ asset('storage/' . $history->foto) }}" alt="Previous Image" style="max-width: 100px;" />
    </div>
    @else
        <p>Tidak ada gambar sebelumnya.</p>
    @endif
    <div class="mb-3">
        <label class="form-label">Upload Image</label>
        <input class="form-control" type="file" name="foto" id="foto" />
    </div>

    <div class="mb-3">
        <label class="form-label" for="basic-form-textarea">Deskripsi</label>
        <textarea class="form-control" id="basic-form-textarea" rows="3" placeholder="Description" name="deskripsi">{{ old('deskripsi', $history->deskripsi) }}</textarea>
    </div>
    <div class="mb-3">
        <p>{{ $history->deskripsi_sebelumnya }}</p>
    </div>
    
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection
