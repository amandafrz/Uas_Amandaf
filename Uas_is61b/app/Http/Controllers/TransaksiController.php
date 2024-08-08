<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\Produk;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $trs = Transaksi::all();
        return view('transaksi.index',compact('nomor','trs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kar = Karyawan::all();
        $pro = Produk::all();
        return view('transaksi.form', compact('kar', 'pro'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trs = new transaksi;
        $trs->kode = $request->kode;
        $trs->karyawans_id = $request->karyawan;
        $trs->nofak = $request->nofak;
        $trs->tanggal = $request->tanggal;
        $trs->produks_id = $request->produk;
        $trs->jumlah = $request->jumlah;
        $trs->harga = $request->harga;
        $trs->total = $request->total;
        $trs->save();


        return redirect('/transaksi/');
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
        $trs = Transaksi::find($id);
        return view('Transaksi.edit',compact());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $trs = Transaksi::find($id);
        $trs->nofak = $request->nofak;
        $trs->tanggal= $request->tanggal;
        $trs->jumlah = $request->jumlah;
        $trs->harga = $request->harga;
        $trs->total = $request->total;
        $trs->save();

        return redirect('/transaksi/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trs = Transaksi::find($id);
        $trs->delete();

        return redirect('/transaksi/');
    }
}
