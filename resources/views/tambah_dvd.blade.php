<!DOCTYPE html>
@extends('template')
@section('tulisan1','DVD')

@section('link1')
<a href="/dvd"> Kembali</a>
@endsection
    @section('konten')
    <form action="/dvd/store" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <label for="kode" class="col-sm-2 col-form-label">Kode</label>
            <div class="col-sm-10">
              <input type="text" name="kode" class="form-control" id="kode" required="required">
            </div>
          </div>

          <div class="row mb-3">
            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
              <input type="text" name="merk" class="form-control" id="merk" required="required">
            </div>
          </div>

          <div class="row mb-3">
            <label for="stock" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
              <input type="number" name="stock" class="form-control" id="stock" required="required">
            </div>
          </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
          </div>

          <div>
          <div class="row mb-3">
            <div class="col-sm-10">
                <<input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
          </div>
	</form>

@endsection
