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
                            <h3 class="panel-title">Daftar Penjualan</h3>
                            <div class="right">
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>No</th>
                                        <th>Buku</th>
                                        <th>Kasir</th>
                                        <th>Jumlah</th>
                                        <th>Diskon</th>
                                        <th>Total</th>
                                        <th>Tanggal</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($penjualan as $jual)
                                            <tr>
                                                <td scope="row">{{ $loop->iteration }}</td>
                                                <td>{{ $jual->buku->judul }}</td>
                                                <td>{{ $jual->user->name }}</td>
                                                <td>{{ $jual->jumlah }}</td>
                                                <td>{{ $jual->diskon }}%</td>
                                                <td>Rp.{{ number_format($jual->total) }}</td>
                                                <td>{{ date('d F Y', strtotime($jual->created_at)) }}</td>
                                                <td>
                                                    <a href="{{ route('detail.penjualan', ['id' => $jual->id]) }}" class="btn btn-info btn-sm">Detail</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">Tambah Data Penjualan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            <div class="modal-body">
                <div class="container-fluid">

                    <form action="{{ route('tambah.penjualan') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="buku">Buku</label>
                            <select type="text" id="buku" name="id_buku" class="form-control">
                                @foreach ($buku as $b)
                                    <option value="{{ $b->id }}">{{ $b->judul }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah Buku</label>
                            <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Masukan Jumlah Buku">
                        </div>
                        <div class="form-group">
                            <label for="diskon">Diskon</label>
                            <input type="number" name="diskon" id="diskon" class="form-control" placeholder="Masukan Diskon Penjualan" >
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#exampleModal').on('show.bs.modal', event => {
        var button = $(event.relatedTarget);
        var modal = $(this);
        // Use above variables to manipulate the DOM
        
    });
</script>