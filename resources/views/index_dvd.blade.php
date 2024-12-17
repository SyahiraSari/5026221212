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
			<th>Kode</th>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($dvd as $d)
		<tr>
			<td>{{ $d->kodedvd }}</td>
			<td>{{ $d->merkdvd }}</td>
			<td>{{ $d->stockdvd }}</td>
            <td>
                @if ($d->tersedia === 'Y')
                    <i class="fa-solid fa-check text-success"></i>
                @else
                    <i class="fa-solid fa-minus text-danger"></i>
                @endif
            </td>
			<td>
				<a href="/dvd/edit/{{ $d->kodedvd }}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
				<a href="/dvd/hapus/{{ $d->kodedvd }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
			</td>
		</tr>
		@endforeach
	</table>
</br>
    Halaman : {{ $dvd->currentPage() }} <br/>
	Jumlah Data : {{ $dvd->total() }} <br/>
	Data Per Halaman : {{ $dvd->perPage() }} <br/>

	{{ $dvd->links() }}

@endsection
