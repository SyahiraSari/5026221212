<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DVDController extends Controller
{
    public function index_dvd(Request $request)
    {
        $dvd = DB::table('dvd')->paginate(10);
    	return view('index_dvd',['dvd' => $dvd]);

    }

    public function tambah_dvd(){

	return view('tambah_dvd');

    }

    public function store(Request $request)
    {
	DB::table('dvd')->insert([
		'merkdvd' => $request->merkdvd,
		'stockdvd' => $request->stockdvd,
		'tersedia' => $request->tersedia,
	]);

	return redirect('/dvd');

    }

    public function edit($kodedvd)
    {
	$dvd = DB::table('dvd')->where('kodedvd','=',$kodedvd)->get();
	return view('edit_dvd',['dvd' => $dvd]);

    }

    public function update(Request $request)
    {
	DB::table('dvd')->where('kodedvd',$request->kodedvd)->update([
		'merkdvd' => $request->merkdvd,
		'stockdvd' => $request->stockdvd,
		'tersedia' => $request->tersedia,
	]);

	return redirect('/dvd');
    }

    public function hapus($kodedvd)
    {
	DB::table('dvd')->where('kodedvd',$kodedvd)->delete();

	return redirect('/dvd');
    }

    public function cari(Request $request)
	{
		$cari = $request->cari;
		$dvd = DB::table('dvd')->where('kodedvd','like',"%".$cari."%")->paginate();

		return view('index_dvd',['dvd' => $dvd]);

	}
}
