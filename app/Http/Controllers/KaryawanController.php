<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    // Menampilkan halaman index
    public function index()
    {
        // Mengambil semua data karyawan dari database
        $karyawan = DB::table('karyawan')->paginate(10);
        // Menampilkan view index dengan data karyawan
        return view('indexkaryawan', [
            'karyawan' => $karyawan
        ]);
    }

    // Menampilkan halaman tambah data
    public function tambah()
    {
        // Menampilkan view tambah
        return view('tambah_karyawan');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('pegawai')->insert([
		'kodepegawai' => $karyawan->kodepegawai,
		'namalengkap' => $karyawan->namalengkap,
		'divisi' => $karyawan->divisi,
		'departemen' => $karyawan->departemen,
	]);

        // Menyimpan data ke tabel karyawan
    DB::table('karyawan')->insert([
        'kodepegawai' => $karyawan->kodepegawai,
		'namalengkap' => $karyawan->namalengkap,
		'divisi' => $karyawan->divisi,
		'departemen' => $karyawan->departemen,
        ]);

        // Redirect ke halaman index
        return redirect('/karyawan')->with('success', 'Data berhasil ditambahkan.');
    }

    // Menghapus data karyawan berdasarkan kodepegawai
    public function hapus($kodepegawai)
    {
        // Menghapus data berdasarkan kodepegawai
        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();

        // Redirect ke halaman index
        return redirect('/karyawan')->with('success', 'Data berhasil dihapus.');
    }
}
