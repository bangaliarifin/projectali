<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\karyawan;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $barang= barang::all();
    return view('barang.index',compact('barang'));
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
        return view('barang.create', compact('karya'));
    
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
        $barang=new barang;
        $barang->nama=$request->a;
        $barang->karyawan_id=$request->b;
        $barang->merek = $request->c;
        $barang->harga = $request->e;
        $barang->jumlah=$request->d;
        if($request->hasfile('cover')){
            $barangs=$request->file('cover');
            $extension=$barangs->getClientOriginalExtension();
            $filename=str_random(6). '.' .$extension;
            $destinationPath=public_path() .
            DIRECTORY_SEPARATOR . 'img';
            $barangs->move($destinationPath ,$filename);
            $barang->cover=$filename;
        }
        $barang->save();
        return redirect()->route('barang.index');
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
        $barang= barang::findOrFail($id);
         $karya= karyawan::all();
        return view('barang.show',compact('barang','karya'));
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
         $barang=barang::findOrFail($id);
         $karya=karyawan::all();
        return view('barang.edit',compact('barang','karya'));
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
        $barang= barang::findOrFail($id);
        $barang->nama=$request->a;
        $barang->karyawan_id=$request->b;
        $barang->merek = $request->c;
        $barang->harga = $request->e;
        $barang->jumlah = $request->d;
        if($request->hasfile('cover')){
            $barangs=$request->file('cover');
            $extension=$barangs->getClientOriginalExtension();
            $filename=str_random(6). '.' .$extension;
            $destinationPath=public_path() .
            DIRECTORY_SEPARATOR . 'img';
            $barangs->move($destinationPath ,$filename);
            $barang->cover=$filename;
        }
        $barang->save();
        return redirect()->route('barang.index');
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
         $barang= barang::findOrFail($id);
            $barang->delete();
        return redirect()->route('barang.index');
    }
}
