<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    //
    protected $fillable = ['name','alamat','no_hp'];
    protected $visible = ['name','alamat','no_hp'];
    public = $timestamps = true;
 	
 	public function barang(){
			return $this->hasMany('App\Barang');
	}
	public function transaksi(){
			return $this->hasMany('App\Transaksi');
	}

}
