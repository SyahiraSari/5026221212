<!DOCTYPE html>
@extends('template')
@section('tulisan1','Data Karyawan')

@section('link1')
    <a href="/karyawan/tambah" class="btn btn-primary"> + Tambah Data</a>
@endsection

@section('konten')
    <br/>
    <form action="/karyawan/cari" method="GET">
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Cari Nama Karyawan:</label>
            <div class="col-sm-6">
                <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari Karyawan .." value="{{ old('cari') }}">
            </div>
            <div class="col-sm-4">
                <input type="submit" value="CARI" class="btn btn-success">
            </div>
        </div>
    </form>
    <br/>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Aksi</th>
        </tr>
        @foreach($karyawan as $k)
        <tr>
            <td>{{ $k->kodepegawai }}</td>
            <td>{{ $k->namalengkap }}</td>
            <td>{{ $k->divisi }}</td>
            <td>{{ $k->departemen }}</td>
            <td>
                <a href="/karyawan/edit/{{ $k->kodepegawai }}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </table>

    <br/>
    Halaman : {{ $karyawan->currentPage() }} <br/>
    Jumlah Data : {{ $karyawan->total() }} <br/>
    Data Per Halaman : {{ $karyawan->perPage() }} <br/>

    {{ $karyawan->links() }}
@endsection
