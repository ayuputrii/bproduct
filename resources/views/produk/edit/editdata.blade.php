@extends('layouts.app')
@section('content')
    <div class="jumbotron">
      <div class="container-fluid">
      <h2 class="h2 text-center"> Form Data Produk Yang Akan di Simpan </h2> <br/>
      <div class="content-header">
		  	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../produk/form"><i class="fa fa-dashboard"></i> Form Produk</a></li>
				<li class="breadcrumb-item"><a href="../produk/data"><i class="fa fa-dashboard"></i> Data Produk</a></li>
		  	</ol>
      </div>
      @foreach ($produk as $p)
        <form method="POST" action="/produk/edit/editdata/update/{{$p->id_produk}}">
        {{ csrf_field() }}
            <div class="form-group">
            <label> Nama Produk </label>
            <input type="text" name="nama_produk" class="form-control" value="{{$p->nama_produk}}" placeholder="Masukan Nama Produk!">
            </div>
            <div class="form-group">
            <label> Keterangan </label>
            <textarea name="keterangan" class="form-control" value="{{$p->keterangan}}" placeholder="Keterangan"></textarea>
            </div>
            <div class="form-group">
            <label> Harga </label>
            <input type="number" name="harga" class="form-control" value="{{$p->harga}}" placeholder="Masukan Harga!">
            </div>
            <div class="form-group">
            <label> Jumlah </label>
            <input type="number" name="jumlah" class="form-control" value="{{$p->jumlah}}" placeholder="Masukan Jumlah Barang Yang Akan di Input!">
            </div>
            <button type="submit" class="btn btn-primary"> Send </button>
            <button type="reset" class="btn btn-danger"> Reset </button>
        </form>
      @endforeach
      </div>
    </div>
@endsection
