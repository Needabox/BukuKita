@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="mt-2">
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                <strong>{{ session()->get('message') }}</strong>
                                <button class="close" type="button" data-dismiss="alert">
                                    <span>&times;</span>
                                </button>
                            </div>
                            @endif
                        </div>
                        <div class="panel-heading">
                            <h3 class="panel-title">Detail Buku <strong>{{ $buku->judul }}</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="card">
                                <h3>Judul Buku : <strong>{{ $buku->judul }}</strong></h3>
                                <h3>Nomor ISBN : <strong>{{  $buku->no_isbn }}</strong></h3>
                                <h3>Penulis : <strong>{{  $buku->penulis }}</strong></h3>
                                <h3>Penerbit : <strong>{{ $buku->penerbit }}</strong></h3>
                                <h3>Tahun : <strong>{{  $buku->tahun }}</strong></h3>
                                <h3>Stok Buku : <strong>{{ $buku->stok }}</strong></h3>
                                <h3>Harga Pokok Buku : <strong>Rp.{{ number_format($buku->harga_pokok) }}</strong></h3>
                                <h3>Harga Jual Buku : <strong>Rp.{{ number_format($buku->harga_jual) }}</strong></h3>
                            </div>
                        </div>
                        <a href="{{ route('buku') }}" class="btn btn-info mt-3">Kembali</a>
                        &nbsp;
                        <a href="{{ route('edit.buku',['id' => $buku->id]) }}" class="btn btn-warning">Edit Buku</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection