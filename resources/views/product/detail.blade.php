@extends('layouts.index')
@section('head','Detail Produk')
@section('content')
<div class="form-group row">
    <label for="namaProduk" class="col-sm-2 col-form-label">Nama Produk</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="nama_produk" value="{{$product->nama_produk}}" id="namaProduk" readonly>
    </div>
</div>

<div class="form-group row">
    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="keterangan" value="{{$product->keterangan}}" id="keterangan" readonly>
    </div>
</div>

<div class="form-group row">
    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" name="harga" value="{{$product->harga}}" id="harga" readonly>
    </div>
</div>

<div class="form-group row">
    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" name="jumlah" value="{{$product->jumlah}}" id="jumlah" readonly>
    </div>
</div>
<a href="/" class="btn btn-warning float-right">Kembali</a>
@endsection