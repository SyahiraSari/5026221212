<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DVDController extends Controller
{
    public function index_dvd()
    {
        $dvd = DB::table('dvd')->paginate(10);
    	return view('index_dvd',['dvd' => $dvd]);

    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah_dvd()
    {

	// memanggil view tambah
	return view('tambah_dvd');

    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('dvd')->insert([
		'kodedvd' => $request->kodedvd,
		'merkdvd' => $request->merkdvd,
		'stockdvd' => $request->stockdvd,
		'tersedia' => $request->tersedia,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/dvd');

    }

    public function edit($kodedvd)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
    // SELECT * FROM pegawai WHERE pegawai_id = x
	$dvd = DB::table('dvd')->where('kodedvd','=',$kodedvd)->get();
    // mengambil data dari table pegawai, tanpa filtering
    //$pegawai = DB::table('pegawai')->get(); //hasilnya array 2D
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit',['dvd' => $dvd]);

    }

    // update data pegawai
    public function update(Request $request)
    {
	// update data pegawai
	DB::table('dvd')->where('kodedvd',$request->kodedvd)->update([
		'kodedvd' => $request->kodedvd,
		'merkdvd' => $request->merkdvd,
		'stockdvd' => $request->stockdvd,
		'tersedia' => $request->tersedia,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/dvd');
    }

    // method untuk hapus data pegawai
    public function hapus($kodedvd)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('dvd')->where('kodedvd',$kodedvd)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/dvd');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$dvd = DB::table('dvd')->where('merkdvd','like',"%".$cari."%")->paginate();

    		// mengirim data pegawai ke view index
		return view('index_dvd',['dvd' => $dvd]);

	}
}
