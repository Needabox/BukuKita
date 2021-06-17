<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Pasok;
use App\Models\Distributor;
use Illuminate\Http\Request;

class DistributorController extends Controller
{
    public function index()
    {
        $active = "distributor";
        $buku = Buku::all();
        $distributor = Distributor::all();
        $pasok = Pasok::simplePaginate(5);

        return view('distributor.index', compact('active', 'buku', 'distributor', 'pasok'));
    }

    public function store(Request $request)
    {
        //dd($request);
        $distributor = Distributor::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ]);

        $buku = Buku::find($request->id_buku);

        $buku->update(['stok' => $buku->stok + $request->jumlah]);

        $pasok = Pasok::create([
            'id_distributor' => $distributor->id,
            'id_buku' => $request->id_buku,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()
            ->route('distributor')
            ->with('message', 'Distributor dan Stok Buku telah ditambahkan!');
    }
}
