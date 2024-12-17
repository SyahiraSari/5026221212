<!DOCTYPE html>
@extends('template')
@section('tulisan1','DVD')

@section('link1')
<a href="/dvd"> Kembali</a>
@endsection
    @section('konten')
    @foreach($dvd as $d)
    <form action="/dvd/update" method="post">
		{{ csrf_field() }}

        <input type="hidden" name="kodedvd" id="kodedvd" value="{{ $d-> kodedvd}}">

          <div class="row mb-3">
            <label for="merkdvd" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
              <input type="text" name="merkdvd" class="form-control" id="merkdvd" required="required" value="{{ $d-> merkdvd}}">
            </div>
          </div>

          <div class="row mb-3">
            <label for="stockdvd" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
              <input type="number" name="stockdvd" class="form-control" id="stockdvd" required="required" value="{{ $d-> stockdvd}}">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10 d-flex align-items-center">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersediaY" value="Y" {{ $d-> tersedia == 'Y' ? 'checked' : ''}}>
                    <label class="form-check-label" for="tersediaY">Ya</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersediaN" value="N" {{ $d-> tersedia == 'N' ? 'checked' : ''}}>
                    <label class="form-check-label" for="tersediaN">Tidak</label>
                </div>
            </div>
        </div>
        <center><button type="submit" class="btn btn-primary mt-2">Update Data</button></center>
	</form>
	@endforeach
@endsection
