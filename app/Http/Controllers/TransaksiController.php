<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;
use App\karyawan;
use App\konsumen;
use App\barang;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $tran= transaksi::all();
    return view('transaksi.index', compact('tran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $karya= karyawan::all();
         $konsu= konsumen::all();
         $barang= barang::all();

        return view('transaksi.create', compact('karya','konsu','barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $tran = new transaksi;
        $tran->karyawan_id = $request->a;
        $tran->konsumen_id = $request->b;
        $tran->barang_id = $request->c;
        if($request->hasfile('barang')){
            $transaksis=$request->file('barang');
            $extension=$transaksis->getClientOriginalExtension();
            $filename=str_random(6). '.' .$extension;
            $destinationPath=public_path() .
            DIRECTORY_SEPARATOR . 'img';
            $transaksis->move($destinationPath ,$filename);
            $tran->$barang->cover=$filename;
        }
        $tran->harga = $request->d;
        $tran->jumlah = $request->f;
        $tran->total = $request->d*$request->f;
        $tran->tgl_pembelian = $request->g;
        $tran->save();
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         $tran= transaksi::findOrFail($id);
         $karya= karyawan::all();
         $konsu= konsumen::all();
         $barang = barang::all();
        return view('transaksi.show',compact('tran','karya','konsu','barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tran= transaksi::findOrFail($id);
         $karya= karyawan::all();
         $konsu= konsumen::all();
         $barang = barang::all();
        return view('transaksi.edit',compact('tran','karya','konsu','barang'));
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
        //
         $tran= transaksi::findOrFail($id);
        $tran->karyawan_id = $request->a;
        $tran->konsumen_id = $request->b;
        $tran->barang_id = $request->c;
        if($request->hasfile('barang')){
            $transaksis=$request->file('barang');
            $extension=$transaksis->getClientOriginalExtension();
            $filename=str_random(6). '.' .$extension;
            $destinationPath=public_path() .
            DIRECTORY_SEPARATOR . 'img';
            $transaksis->move($destinationPath ,$filename);
            $tran->barang->cover=$filename;
        }
        $tran->harga = $request->d;
        $tran->jumlah = $request->f;
        $tran->total = $request->d*$request->f;
        $tran->tgl_pembelian = $request->g;
        $tran->save();
        return redirect()->route('transaksi.index');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $tran= transaksi::findOrFail($id);
        $tran->delete();
        return redirect()->route('transaksi.index');
    }
}
