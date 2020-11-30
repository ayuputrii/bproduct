<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelProduk extends Model
{
    protected $table = "produk";
    public $primaryKey = "id_produk";

    protected $fillable = [
      'nama_produk', 'keterangan', 'harga', 'jumlah'
    ];

    public $timestamps = false;

    protected $dates = ['deleted_at'];
}
