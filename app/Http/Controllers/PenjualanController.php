<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Buku;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $active = "penjualan";
        
        $penjualan = Penjualan::all();
        $buku = Buku::all();

        return view('penjualan.index', compact('penjualan', 'active', 'buku'));
    }

    public function store(Request $request)
    {
        //dd($request);
        $buku = Buku::find($request->id_buku);

        $buku->update(['stok' => $buku->stok - $request->jumlah]);

        //Mnghitung Total awal harga
        $harga_awal = floatval($buku->harga_jual) * floatval($request->jumlah);

        //Menghitung Diskon
        $diskon = $harga_awal * $request->diskon / 100;

        //Mengurangi Total awal dengan diskon
        $harga_diskon = $harga_awal - $diskon;

        //Menghitung PPN
        $ppn = $harga_diskon * 10 / 100;

        //Mendapatkan Hasil Total
        $total = $harga_diskon + $ppn;

        $penjualan = Penjualan::create([
            'id_buku' => $request->id_buku,
            'id_user' => Auth::user()->id,
            'jumlah' => $request->jumlah,
            'total_awal' => $harga_awal,
            'diskon' => $request->diskon,
            'diskon_total' => $diskon,
            'ppn' => $ppn,
            'total' => $total,
        ]);

        return redirect()
            ->route('penjualan')
            ->with('message', 'Buku Berhasil terjual');
    }

    public function detail($id)
    {
        $active = "penjualan";
        $penjualan = Penjualan::find($id);

        return view('penjualan.detail', compact('active', 'penjualan'));
    }


}
