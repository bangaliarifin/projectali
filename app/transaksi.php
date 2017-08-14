<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    //
    protected $fillable = ['karyawan_id','konsumen_id','barang_id','harga','jumlah','total','tgl_pembelian'];
    protected $visible = ['karyawan_id','konsumen_id','barang_id','harga','jumlah','total','tgl_pembelian'];
    public  $timestamps = true;

    public function karyawan(){
			return $this->belongsTo('App\Karyawan');
	}
	public function konsumen(){
			return $this->belongsTo('App\Konsumen');
	}
	public function barang(){
			return $this->belongsTo('App\Barang');
	}
}
