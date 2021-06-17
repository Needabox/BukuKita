@extends('layouts.app2')
@section('content')
        <div class="col-xl-12 col-lg-7">
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">DAFTAR BUKU</h6>
                </div>
                <table class="table table-striped table-responsive-xl">
                    <thead class="thead-inverse">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td>SENJA ITU MITOS</td>
                                <td>RAFLI</td>
                                <td>517</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-fw fa-info"></i>Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">2</td>
                                <td>KEPERCAYAAN ITU MITOS</td>
                                <td>Sendy Chicks</td>
                                <td>787</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-fw fa-info"></i>Detail</a>
                                </td>
                            </tr>
                        </tbody>
                </table>
            </div>
        </div>
@endsection