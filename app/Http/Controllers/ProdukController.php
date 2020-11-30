<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use App\ModelProduk;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = ModelProduk::all();
        return view('produk/form', ['produk' => $produk]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        $produk = ModelProduk::all();
        return view('produk/data', ['produk' => $produk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.form.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('produk')->insert([
            'id_produk'         => $request->id_produk,
            'nama_produk'       => $request->nama_produk,
            'keterangan'        => $request->keterangan,
            'harga'             => $request->harga,
            'jumlah'            => $request->jumlah,
        ]);
        return redirect('produk/data');
    }

   public function cari(Request $request)
    {
        $cari = $request->nama_produk;
        $produk = ModelProduk::where('nama_produk', $cari)->get();

        return view('produk/data', ['produk' => $produk]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = DB::table('produk')->where('id_produk', $id)->get();

        return view('produk.edit.editdata', ['produk' => $produk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produk = ModelProduk::where('id_produk', $id);
        $produk->update($request->except(['_token']));
        return redirect('produk/data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('produk')->where('id_produk', $id)->delete();

        return redirect('produk/data');
    }
}
