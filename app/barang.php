<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    //
    protected $fillable = ['nama','karyawan_id','merek','jumlah','cover'];
    protected $visible = ['nama','karyawan_id','merek','jumlah','cover'];
    public  $timestamps = true;
 	
 	public function karyawan(){
			return $this->belongsTo('App\Karyawan');
	}
	public function transaksi(){
			return $this->hasMany('App\Transaksi');
	}

}
