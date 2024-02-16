@extends('layouts.app')
  
@section('title', 'Show Pegawai')
  
@section('contents')
    <h1 class="mb-0">Detail Pegawai</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $pegawai->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Usia</label>
            <input type="number" name="usia" class="form-control" placeholder="" value="{{ $pegawai->usia }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" placeholder="" value="{{ $pegawai->jabatan}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" placeholder="" readonly>{{ $pegawai->alamat}}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $pegawai->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $pegawai->updated_at }}" readonly>
        </div>
    </div>
@endsection