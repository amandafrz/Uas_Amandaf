<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Transaksi1;
use App\Models\Karyawan;
class Transaksi1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $tr    = transaksi1::all();
        return view('transaksi1.index',compact('nomor','tr'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kar  = Karyawan::all();
        $pro  = Produk::all();

        return view('transaksi1.form',compact('kar','pro'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tr = new transaksi1;
        $tr->kode = $request->kode;
        $tr->karyawans_id = $request->karyawan;
        $tr->nofak = $request->nofak;
        $tr->tanggal = $request->tanggal;
        $tr->produks_id = $request->produk;
        $tr->jumlah = $request->jumlah;
        $tr->harga = $request->harga;
        $tr->total = $request->total;
        $tr->save();
        return redirect('/transaksi1/');
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
        $tr = Transaksi1::find($id);
        return view('transaksi1.edit',compact('tr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tr = Transaksi1::find($id);
        $tr->kode = $request->kode;
        $tr->karyawans_id = $request->karyawan;
        $tr->nofak = $request->nofak;
        $tr->tanggal = $request->tanggal;
        $tr->produks_id = $request->produk;
        $tr->jumlah = $request->jumlah;
        $tr->harga = $request->harga;
        $tr->total = $request->total;
        $tr->save();
        return redirect('/transaksi1/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tr = Transaksi1::find($id);
        $tr->delete();

        return redirect('/transaksi1/');
    }
}
