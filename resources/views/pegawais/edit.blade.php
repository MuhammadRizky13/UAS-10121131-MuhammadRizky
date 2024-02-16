@extends('layouts.app')
  
@section('title', 'Edit Pegawai')
  
@section('contents')
    <h1 class="mb-0">Edit Pegawai</h1>
    <hr />
    <form action="{{ route('pegawais.update', $pegawai->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $pegawai->nama }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Usia</label>
                <input type="text" name="usia" class="form-control" placeholder="Usia" value="{{ $pegawai->usia}}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jabatan</label>
                <input type="text" name="kelas" class="form-control" placeholder="Jabatan" value="{{ $pegawai->jabatan }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Aamat</label>
                <textarea class="form-control" name="jurusan" placeholder="Alamat" >{{ $pegawai->alamat }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection