@extends('layouts.app')
@section('content')
    <div class="jumbotron">
      <div class="container-fluid"><br/>
      <h2 class="h2 text-center"> Data Table Produk Yang Telah Tersimpan! </h2> <br/> 
      <div class="content-header">
		  	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/produk/form"><i class="fa fa-dashboard"></i> Form Produk</a></li>
				<li class="breadcrumb-item"><a href="/produk/data"><i class="fa fa-dashboard"></i> Data Produk</a></li>
		  	</ol>
      </div>
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($produk as $p)
            <tbody>
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $p -> nama_produk }} </td>
                    <td>{{ $p -> harga }} </td>
                    <td>{{ $p -> jumlah }} </td>
                    <td>
                        <a href="edit/editdata/{{ $p->id_produk }}">
                            <button class="btn btn-danger btn-sm">Edit</button>
                        </a>
                        <a href="/produk/data/hapus/{{ $p->id_produk }}">
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </a>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
      </div>
    </div>
@endsection