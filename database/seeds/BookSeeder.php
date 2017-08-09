<?php

use Illuminate\Database\Seeder;
use App\karyawan;
use App\konsumen;
use App\barang;
use App\transaksi;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sampel karyawan
        $karyawan1 = Karyawan::create(['name'=>'Atong','alamat'=>'kp cacadas','no_hp'=>'08976546789']);
        $karyawan2 = Karyawan::create(['name'=>'Samsudin','alamat'=>'kp margahayu','no_hp'=>'08976546785']);
        $karyawan3 = Karyawan::create(['name'=>'Doni','alamat'=>'kp kalongoanjang','no_hp'=>'089765466573']);

        //sampel konsumen
        $konsumen1 = Konsumen::create(['name'=>'Asep Konci','alamat'=>'kp hampelas','no_hp'=>'08976546789']);
        $konsumen2 = Konsumen::create(['name'=>'Lia Amelia','alamat'=>'kp bojong','no_hp'=>'08976546785']);
        $konsumen3 = Konsumen::create(['name'=>'Gagan','alamat'=>'kp gantante','no_hp'=>'08976546789']);

        //sampel barang
        $barang1 = Barang::create(['nama'=>'baju raggae','karyawan_id'=>'karyawan1'->id,'merek'=>'sunda wani','jumlah'=>10]);
        $barang2 = Barang::create(['nama'=>'baju renang','karyawan_id'=>'karyawan2'->id,'merek'=>'karangsetra','jumlah'=>5]);
        $barang3 = Barang::create(['nama'=>'baju polos','karyawan_id'=>'karyawan3'->id,'merek'=>'antapani','jumlah'=>9]);

        //sampel transaksi
        $transaksi1 = Transaksi::create(['karyawan_id'=>'karyawan2'->id,'konsumen_id'=>'konnsumen1'->id,'barang_id'=>'barang1'->id,'harga'=>25000,'jumlah'=>10,'total'=>250000,'tgl_pembelian'=>'2012-09-01']);
        $transaksi2 = Transaksi::create(['karyawan_id'=>'karyawan1'->id,'konsumen_id'=>'konnsumen2'->id,'barang_id'=>'barang2'->id,'harga'=>20000,'jumlah'=>10,'total'=>200000,'tgl_pembelian'=>'2013-09-12']);
        $transaksi3 = Transaksi::create(['karyawan_id'=>'karyawan3'->id,'konsumen_id'=>'konnsumen3'->id,'barang_id'=>'barang3'->id,'harga'=>25000,'jumlah'=>5,'total'=>125000,'tgl_pembelian'=>'2012-09-01']);




    }
}
