@extends('layouts.app')
  
@section('title', 'Home Pegawai')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Pegawai</h1>
        <a href="{{ route('pegawais.create') }}" class="btn btn-primary">Add Pegawai</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Usia</th>
                <th>Jabatan</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($pegawai->count() > 0)
                @foreach($pegawai as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nama }}</td>
                        <td class="align-middle">{{ $rs->usia }}</td>
                        <td class="align-middle">{{ $rs->jabatan }}</td>
                        <td class="align-middle">{{ $rs->alamat }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('pegawais.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('pegawais.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('pegawais.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Pegawai not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection