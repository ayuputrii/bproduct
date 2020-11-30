@extends('layouts.app')
@section('content')
    <div class="jumbotron">
      <div class="container-fluid">
      <h2 class="h2 text-center"> Form Data Produk Yang Akan di Simpan </h2> <br/>
      <div class="content-header">
		  	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/produk/form"><i class="fa fa-dashboard"></i> Form Produk</a></li>
				<li class="breadcrumb-item"><a href="/produk/data"><i class="fa fa-dashboard"></i> Data Produk</a></li>
		  	</ol>
      </div>
      <form action="/produk/data/store" method = "post" class="form">
        {{ csrf_field() }}
        <div class="form-group">
          <label> Nama Produk </label>
          <input type="text" name="nama_produk" class="form-control" placeholder="Masukan Nama Produk!">
        </div>
        <div class="form-group">
          <label> Keterangan </label>
          <textarea name="keterangan" class="form-control" placeholder="Keterangan"></textarea>
        </div>
        <div class="form-group">
          <label> Harga </label>
          <input type="nu" name="harga" class="form-control" placeholder="Masukan Harga!">
        </div>
        <div class="form-group">
          <label> Jumlah </label>
          <input type="number" name="jumlah" class="form-control" placeholder="Masukan Jumlah Barang Yang Akan di Input!">
        </div>
        <button type="submit" class="btn btn-primary"> Send </button>
        <button type="reset" class="btn btn-danger"> Reset </button>
      </form>
      </div>
    </div>
@endsection
