<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view('transaksi.form',compact());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'nim' => 'required|unique:mahasiswas,nim',
        //     'nama' => 'required',
        //     'foto' => 'required|max:10000|image',
        // ],[
        //     'required' => ':attribute Harus Diisi',
        //     'unique' => ':attribute sudah pernah digunakan, silakan pilih :attribute lain',
        // ]);

        $trs = new transaksi;
        $trs->kdm = $request->kdm;
        $trs->tanggal = $request->tanggal;
        $trs->nama = $request->nama;
        $trs->total = $request->total;
        $trs->kdd = $request->kdd;
        $trs->qty = $request->qty;
        $mhs->save();


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
        $mhs = Transaksi::find($id);
        return view('Transaksi.edit',compact());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $trs = Transaksi::find($id);
        $trs->kdm = $request->kdm;
        $trs->tanggal = $request->tanggal;
        $trs->nama = $request->nama;
        $trs->total = $request->total;
        $trs->kdd = $request->kdd;
        $trs->qty = $request->qty;
        $mhs->save();

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
