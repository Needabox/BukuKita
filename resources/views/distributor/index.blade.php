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
                            <h3 class="panel-title">Daftar Pasok</h3>
                            <div class="right">
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>No</th>
                                        <th>Distributor</th>
                                        <th>Buku</th>
                                        <th>Jumlah</th>
                                        <th>Alamat</th>
                                        <th>Telepon</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pasok as $p)
                                            <tr>
                                                <td>{{ ($pasok->currentpage()-1) * $pasok->perPage() + $loop->iteration }}</td>
                                                <td>{{ $p->distributor->nama }}</td>
                                                <td>{{ $p->buku->judul }}</td>
                                                <td>{{ $p->jumlah }}</td>
                                                <td>{{ $p->distributor->alamat }}</td>
                                                <td>{{ $p->distributor->telepon }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                            {{ $pasok->links() }}
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
                        <h5 class="modal-title">Tambah Daftar Pasok</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="{{ route('tambah.distributor') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nama">Distributor</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Distributor">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat Distributor">
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Masukan Telepon Distributor">
                        </div>
                        <div class="form-group">
                            <label for="buku">Buku</label>
                            <select type="text" id="buku" name="id_buku" class="form-control">
                                @foreach ($buku as $b)
                                    <option value="{{ $b->id }}">{{ $b->judul }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Masukan Jumlah">
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