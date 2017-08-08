<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('karyawan_id')->unsigned();
            $table->integer('konsumen_id')->unsigned();
            $table->integer('barang_id')->unsigned();
            $table->integer('harga')->unsigned();
            $table->integer('jumlah')->unsigned();
            $table->integer('total')->unsigned();
            $table->date('tgl_pembelian');
            $table->timestamps();
            $table->foreign('karyawan_id')->references('id')->on('karyawans')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('konsumen_id')->references('id')->on('konsumens')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('barang_id')->references('id')->on('barangs')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
