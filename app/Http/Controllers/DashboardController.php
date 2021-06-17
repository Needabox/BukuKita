<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Pasok;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Buku $buku)
    {
        $active = "dashboard";
        $buku = Buku::all();
        $penjualan = Penjualan::all();
        $pasok = Pasok::all();

        return view('dashboard.index', compact('active','buku','penjualan','pasok'));
    }
}
