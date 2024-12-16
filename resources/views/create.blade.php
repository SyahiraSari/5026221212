@extends('template')

@section('tulisan1', 'Keranjang Belanja')

@section('link1')
    <a href="/keranjangbelanja">Kembali</a>
@endsection

@section('konten')
    <form action="/keranjangbelanja/store" method="post">
        {{ csrf_field() }}


        <div class="mb-3">
            <label for="KodeBarang" class="col-sm-2 control-label">Kode Barang</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="KodeBarang" name="KodeBarang" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="Jumlah" class="col-sm-2 control-label">Jumlah</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="Jumlah" name="Jumlah" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="Harga" class="col-sm-2 control-label">Harga</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="Harga" name="Harga" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
                <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
            </div>
        </div>
    </form>
@endsection

