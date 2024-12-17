<!DOCTYPE html>
@extends('template')
@section('tulisan1','Tambah Data')

@section('link1')
<a href="/karyawan"> Kembali</a>
@endsection
    @section('konten')
    <form action="/karyawan/store" method="post">
		{{ csrf_field() }}

        <form>
            <div class="form-group row mb-3">
                <label for="merkdvd" class="col-sm-2 col-form-label">kodepegawai</label>
                <div class="col-sm-10">
                  <input type="number" name="kodepegawai" class="form-control" id="kodepegawai" required="required" placeholder="Isi kodepegawai">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="NAMALENGKAP" class="col-sm-2 col-form-label">NAMALENGKAP</label>
                <div class="col-sm-10">
                  <input type="text" name="NAMALENGKAP" class="form-control" id="NAMALENGKAP" required="required" placeholder="Isi NAMALENGKAP">
                </div>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="divisi" class="col-sm-2 col-form-label">divisi</label>
            <div class="col-sm-10">
              <input type="text" name="divisi" class="form-control" id="divisi" required="required" placeholder="Isi divisi">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="departemen" class="col-sm-2 col-form-label">departemen</label>
            <div class="col-sm-10">
              <input type="text" name="departemen" class="form-control" id="departemen" required="required" placeholder="departemen">
            </div>
                </div>
            </div>
            <center><button type="submit" class="btn btn-primary mt-2">Update Data</button></center>
        </form>
	</form>
@endsection
