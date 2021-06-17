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
                            <h3 class="panel-title">Daftar Buku</h3>
                            <div class="right">
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-trash"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="card">
                                <form action="{{ route('update.buku', ['id' => $buku->id]) }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="judul">Judul Buku</label>
                                        <input type="text" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Masukan Judul buku" value="{{ $buku->judul }}">
                                        @error('judul')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="no_isbn">Nomor ISBN</label>
                                        <input type="text" name="no_isbn" id="no_isbn" class="form-control @error('no_isbn') is-invalid @enderror" placeholder="Format : aaaa-bbbb-cccc" value="{{ $buku->no_isbn }}">
                                        @error('no_isbn')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="penulis">Nama Penulis</label>
                                        <input type="text" name="penulis" id="penulis" class="form-control @error('penulis') is-invalid @enderror" placeholder="Masukan Nama Penulis" value="{{ $buku->penulis }}">
                                        @error('penulis')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="penerbit">Penerbit</label>
                                        <input type="text" name="penerbit" id="penerbit" class="form-control @error('penerbit') is-invalid @enderror" placeholder="Masukan Nama Penerbit" value="{{ $buku->penerbit }}">
                                        @error('penerbit')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun">Tahun</label>
                                        <input type="text" name="tahun" id="tahun" class="form-control @error('tahun') is-invalid @enderror" placeholder="Masukan Tahun Buku" value="{{ $buku->tahun }}">
                                        @error('tahun')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Stok</label>
                                        <input type="number" name="stok" id="stok" class="form-control @error('stok') is-invalid @enderror" placeholder="Masukan Jumlah Stok Buku" value="{{  $buku->stok }}" >
                                        @error('stok')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_pokok">Harga Pokok</label>
                                        <input type="text" name="harga_pokok" id="harga_pokok" class="form-control @error('harga_pokok') is-invalid @enderror" placeholder="Masukan Harga Pokok" value="{{  $buku->harga_pokok }}">
                                        @error('harga_pokok')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_jual">Harga Jual</label>
                                        <input type="text" name="harga_jual" id="harga_jual" class="form-control @error('harga_jual') is-invalid @enderror" placeholder="Masukan Harga Jual" value="{{ $buku->harga_jual }}">
                                        @error('harga_jual')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-success btn-sm mt-4">Update</button>
                                </form>
                            </div>
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
                        <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            <div class="modal-body">
                <div class="container-fluid">
                    Apakah anda yakin ingin menghapus buku <strong>{{ $buku->judul }}</strong> ?
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{ route('delete.buku', ['id' => $buku->id]) }}" class="btn btn-danger">Hapus</a>
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