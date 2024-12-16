<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
        return view('indexKeranjangBelanja', ['keranjangbelanja' => $keranjangbelanja]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);

        return redirect('/keranjangbelanja')->with('success', 'Data berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        DB::table('keranjangbelanja')->where('ID', $id)->delete();
        return redirect('/keranjangbelanja')->with('success', 'Data berhasil dihapus.');
    }
}
