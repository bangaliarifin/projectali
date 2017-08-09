<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\konsumen;

class KosumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $konsu = konsumen::all();
        return view('konsumen.index', compact('konsu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('konsumen.create');
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
         $konsu = new konsumen;
        $konsu->name = $request->a;
        $konsu->alamat = $request->b;
        $konsu->no_hp = $request->c;
        $konsu->save();
        return redirect()->route('konsumen.index');

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
         $konsu = konsumen::findOrFail($id);
        return view('konsumen.show', compact('konsu'));
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
         $konsu = konsumen::findOrFail($id);
        return view('konsumen.edit', compact('konsu'));
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
         $konsu = konsumen::findOrFail($id);
        $konsu->name = $request->a;
        $konsu->alamat = $request->b;
        $konsu->no_hp = $request->c;
        $konsu->save();
        return redirect()->route('konsumen.index');
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
          $konsu = konsumen::findOrFail($id);
        $konsu ->delete();
        return redirect()-route('konsumen.index');
    }
}
