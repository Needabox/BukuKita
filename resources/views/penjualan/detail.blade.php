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
                            <h3 class="panel-title">Detail Penjualan</h3>
                        </div>
                        <div class="panel-body">
                            <p>Buku : <strong>{{ $penjualan->buku->judul }}</strong></p>
                            <p>Kasir : <strong>{{ $penjualan->user->name }}</strong></p>
                            <p>Jumlah: <strong>{{ $penjualan->jumlah }}</strong></p>
                            <p>Harga Total : <strong>Rp. {{ number_format($penjualan->total_awal) }}</strong></p>
                            <p>Diskon:  <strong>{{ $penjualan->diskon }}%</strong></p>
                            <p>Mendapat Diskon Sebesar : <strong>Rp. {{ number_format($penjualan->diskon_total) }}</strong></p>
                            <p>PPN 10% : <strong>Rp.{{ number_format($penjualan->ppn) }}</strong></p>
                            <p>Total yang harus dibayar : <strong>Rp.{{ number_format($penjualan->total) }}</strong></p>
                            <a href="{{ route('penjualan') }}" class="btn btn-info">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection