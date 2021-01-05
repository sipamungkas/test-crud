@extends('layouts.index')
@section('head','Daftar Produk')
@section('content')

<a href="{{route('create')}}" class="btn btn-primary mb-3 float-right">Tambah Produk</a>
<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Harga</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($products as $item)
        <tr>
            <th scope="row">{{$loop->index + 1}}</th>
            <td>{{$item->nama_produk}}</td>
            <td>{{$item->keterangan}}</td>
            <td>{{$item->harga}}</td>
            <td>{{$item->jumlah}}</td>
            <td>
                <form action="{{route('delete',['id'=>$item->id])}}" method="post">
                    <a href="{{route('show',['id'=>$item->id])}}" class="btn btn-sm btn-info">Lihat</a>
                    <a href="{{route('edit',['id'=>$item->id])}}" class="btn btn-sm btn-warning">Edit</a>
                    <input class="btn btn-sm btn-danger" type="submit" value="Hapus" />    
                    <input type="hidden" name="_method" value="delete" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
                
            </td>
        </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">Tidak ada data</td>
            </tr>
        @endforelse
    </tbody>
    </table>
@endsection