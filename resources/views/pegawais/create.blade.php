@extends('layouts.app')
  
@section('title', 'Create Pegawai')
  
@section('contents')
    <h1 class="mb-0">Add Pegawai</h1>
    <hr />
    <form action="{{ route('pegawais.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <input type="number" name="usia" class="form-control" placeholder="Usia">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="jabatan" class="form-control" placeholder="Jabatan">
            </div>
            <div class="col">
                <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection