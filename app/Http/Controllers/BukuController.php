<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(Request $request, Buku $buku)
    {
        $active = "books"; 
        $q = $request->input('q');

        $buku = $buku->when($q, function($query) use ($q){
            return $query->where('judul', 'like', '%'.$q.'%')
                        ->OrWhere('penulis', 'like', '%'.$q.'%');
        })->simplePaginate(5);

        $request = $request->all();
        return view('books.index', compact('buku', 'active', 'request'));
    }

    public function detail($id)
    {
        $active = "books";
        $buku = Buku::find($id);
        return view('books.details', compact('active', 'buku'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
                'judul' => 'required|min:2',
                'no_isbn' => 'required',
                'penulis' => 'required|min:2',
                'penerbit' => 'required',
                'tahun' => 'required',
                'stok' => 'required',
                'harga_pokok' => 'required',
                'harga_jual' => 'required',
        ]);
        $buku = Buku::create($request->all());

        return redirect()
            ->route('buku')
            ->with('message', 'Buku '. $buku['judul']. ' telah ditambahkan!');
    }

    public function edit($id)
    {
        $active = "books";
        $buku = Buku::find($id);
        return view('books.edit', compact('buku', 'active'));
    }

    public function update(Request $request, $id)
    {
        $active = "books";
        $buku = Buku::find($id);

        $this->validate($request,[
            'judul' => 'required|min:2',
            'no_isbn' => 'required',
            'penulis' => 'required|min:2',
            'penerbit' => 'required',
            'tahun' => 'required',
            'stok' => 'required',
            'harga_pokok' => 'required',
            'harga_jual' => 'required',
            ]);
            
            $buku->update($request->all());

        return redirect()
            ->route('buku')
            ->with('message', 'Buku '. $buku['judul']. ' telah diperbarui!');
    }

    public function destroy($id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect()
            ->route('buku')
            ->with('message', 'Buku Berhasil Dihapus');
    }
}
