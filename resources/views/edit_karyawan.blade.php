<!DOCTYPE html>
@extends('template')
@section('tulisan1','karyawan')

@section('link1')
<a href="/karyawan"> Kembali</a>
@endsection
    @section('konten')
    @foreach($karyawan as $k)
    <form action="/karyawan/update" method="post">
		{{ csrf_field() }}

        <input type="hidden" name="kodepegawai" id="kodepegawai" value="{{ $k-> kodepegawai}}">

          <div class="row mb-3">
            <label for="namalengkap" class="col-sm-2 col-form-label">NAMALENGKAP</label>
            <div class="col-sm-10">
              <input type="text" name="namalengkap" class="form-control" id="namalengkap" required="required" value="{{ $k-> namalengkap}}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="divisi" class="col-sm-2 col-form-label">divisi</label>
            <div class="col-sm-10">
              <input type="number" name="divisi" class="form-control" id="divisi" required="required" value="{{ $k-> divisi}}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="departemen" class="col-sm-2 col-form-label">departemen</label>
            <div class="col-sm-10">
              <input type="number" name="departemen" class="form-control" id="departemen" required="required" value="{{ $k-> departyemen}}">
            </div>
        </div>
        <center><button type="submit" class="btn btn-primary mt-2">Update Data</button></center>
	</form>
	@endforeach
@endsection
