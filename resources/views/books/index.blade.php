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
                            <h3 class="panel-title">Daftar Buku <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button></h3>
                            <div class="right">
                                <form class="form-inline ">
                                    <input class="form-control mr-sm-2" type="search" size="27" name="q" value="{{ $request['q'] ?? ''}}" placeholder="Cari Buku Impianmu Yuk!">
                                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Penulis</th>
                                        <th>Stok</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($buku as $b)
                                        <tr>
                                            <td scope="row">{{ ($buku->currentpage()-1) * $buku->perPage() + $loop->iteration }}</td>
                                            <td>{{ $b->judul }}</td>
                                            <td>{{ $b->penulis }}</td>
                                            <td>{{ $b->stok }}</td>
                                            <td>
                                                <a href="{{ route('detail.buku', ['id' => $b->id]) }}" class="btn btn-primary btn-sm"><i class="lnr lnr-detail"></i>Detail</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                            {{ $buku->appends($request)->links() }}
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
                        <h5 class="modal-title">Tambah Buku</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="{{ route('tambah.buku') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="judul">Judul Buku</label>
                            <input type="datetime-local" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Masukan Judul buku">
                            @error('judul')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_isbn">Nomor ISBN</label>
                            <input type="text" name="no_isbn" id="no_isbn" class="form-control @error('no_isbn') is-invalid @enderror" placeholder="Format : aaaa-bbbb-cccc">
                            @error('no_isbn')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="penulis">Nama Penulis</label>
                            <input type="text" name="penulis" id="penulis" class="form-control @error('penulis') is-invalid @enderror" placeholder="Masukan Nama Penulis">
                            @error('penulis')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" name="penerbit" id="penerbit" class="form-control @error('penerbit') is-invalid @enderror" placeholder="Masukan Nama Penerbit">
                            @error('penerbit')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" name="tahun" id="tahun" class="form-control @error('tahun') is-invalid @enderror" placeholder="Masukan Tahun Buku">
                            @error('tahun')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" name="stok" id="stok" class="form-control @error('stok') is-invalid @enderror" placeholder="Masukan Jumlah Stok Buku">
                            @error('stok')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="harga_pokok">Harga Pokok</label>
                            <input type="text" name="harga_pokok" id="harga_pokok" class="form-control @error('harga_pokok') is-invalid @enderror" placeholder="Masukan Harga Pokok">
                            @error('harga_pokok')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="harga_jual">Harga Jual</label>
                            <input type="text" name="harga_jual" id="harga_jual" class="form-control @error('harga_jual') is-invalid @enderror" placeholder="Masukan Harga Jual">
                            @error('harga_jual')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success btn-sm mt-4">Submit</button>
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