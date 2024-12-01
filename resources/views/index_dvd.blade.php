<!DOCTYPE html>
@extends('template')
@section('tulisan1','DVD')

@section('link1')
    <a href="/dvd/tambah" class="btn btn-primary"> + Tambah DVD Baru</a>
@endsection

@section('konten')
	<br/>
	<form action="/dvd/cari" method="GET">
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Cari Merk DVD:</label>
            <div class="col-sm-6">
              <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari DVD .." value="{{ old('cari') }}">
            </div>
            <div class="col-sm-4">
                <input type="submit" value="CARI" class="btn btn-success">
              </div>
          </div>
	</form>
	<br/>

	<table class="table table-stripped table-hover">
		<tr>
			<th>kodedvd</th>
			<th>merkdvd</th>
			<th>stockdvd</th>
			<th>tersedia</th>
		</tr>
		@foreach($dvd as $dvd)
		<tr>
			<td>{{ $dvd->kodedvd }}</td>
			<td>{{ $dvd->merkdvd }}</td>
			<td>{{ $dvd->stockdvd }}</td>
			<td>{{ $dvd->tersedia }}</td>
			<td>
				<a href="/dvd/edit/{{ $dvd->kodedvd }}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
				<a href="/dvd/hapus/{{ $dvd->kodedvd }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
