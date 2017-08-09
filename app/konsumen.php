<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class konsumen extends Model
{
    //
    protected $fillable = ['name','alamat','no_hp'];
    protected $visible = ['name','alamat','no_hp'];
    public  $timestamps = true;
 	
 	public function transaksi(){
			return $this->hasMany('App\Transaksi');
	}

}
