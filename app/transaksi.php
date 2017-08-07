<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    //
    protected $fillable = ['karyawan_id','konsumen_id','barang_id','jumlah','total','tgl_pembelian'];
    protected $visible = ['name','alamat','no_hp'];
    public = $timestamps = true;

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
