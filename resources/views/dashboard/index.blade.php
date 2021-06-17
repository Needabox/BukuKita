@extends('layouts.master')
@section('content')
<head>
    <style>
.card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter.warning{
    background-color: #FFC107;
    color: #FFF;
  }

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
    </style>
</head>
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
                            <h3 class="panel-title">Dashboard</h3>
                        <div class="panel-body">
                          <h2 class="text-center">Selamat Datang Di PLAYBOOK</h2>
                          <p class="text-center">Beli buku gak pake ribet ke toko lagi!</p>
                        </div>
                        <div class="container">
                            <div class="row">
                            <div class="col-md-3">
                              <div class="card-counter primary">
                                <i class="fa fa-book"></i>
                                <span class="count-numbers">{{ $buku->count() }}</span>
                                <span class="count-name">Buku</span>
                              </div>
                            </div>
                        
                            <div class="col-md-3">
                              <div class="card-counter warning">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="count-numbers">{{ $penjualan->count() }}</span>
                                <span class="count-name">Pesanan</span>
                              </div>
                            </div>
                        
                            <div class="col-md-3">
                              <div class="card-counter success">
                                <i class="fa fa-tags"></i>
                                <span class="count-numbers">{{ $pasok->count() }}</span>
                                <span class="count-name">Pasok</span>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection