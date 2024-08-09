<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksii;
use App\Models\Kategori;
class TransaksiiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $trs = Transaksii::all();
        return view('transaksii.index',compact('nomor','trs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksii.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trs = new transaksii;
        $trs->kode = $request->kode;
        $trs->nofak = $request->nofak;
        $trs->tanggal = $request->tanggal;
        $trs->produk = $request->produk;
        $trs->jumlah = $request->jumlah;
        $trs->harga = $request->harga;
        $trs->save();
        return redirect('/transaksii/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trs = Transaksii::find($id);
        return view('transaksii.edit',compact('trs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $trs = Transaksii::find($id);
        $trs->kode = $request->kode;
        $trs->nofak = $request->nofak;
        $trs->tanggal = $request->tanggal;
        $trs->produk = $request->produk;
        $trs->jumlah = $request->jumlah;
        $trs->harga = $request->harga;
        $trs->save();
        return redirect('/transaksii/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tr = Transaksii::find($id);
        $tr->delete();

        return redirect('/transaksii/');
    }
}
