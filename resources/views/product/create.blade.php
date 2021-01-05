@extends('layouts.index')
@section('head','Tambah Produk')
@section('content')
<form method="POST" action="{{route('store')}}" >
    @csrf
    <div class="form-group row">
        <label for="namaProduk" class="col-sm-2 col-form-label">Nama Produk</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_produk" id="namaProduk">
        </div>
    </div>
    
    <div class="form-group row">
        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="keterangan" id="keterangan">
        </div>
    </div>

    <div class="form-group row">
        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="harga" id="harga">
        </div>
    </div>

    <div class="form-group row">
        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="jumlah" id="jumlah">
        </div>
    </div>

    <a href="/" class="btn btn-warning float-left">Batal</a>
    <input type="submit" class="btn btn-primary float-right" value="Simpan">
</form>
@endsection