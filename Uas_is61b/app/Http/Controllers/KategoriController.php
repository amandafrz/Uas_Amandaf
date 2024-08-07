<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $kat = Kategori::all();
        return view('kategori.index',compact('nomor','kat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kat = new Kategori;
        $kat->kode = $request->kode;
        $kat->nm_kat = $request->nm_kat;
        $kat->save();

        return redirect('/kategori/');
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
        $kat = Kategori::find($id);
        return view('kategori.edit',compact('kat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kat = Kategori::find($id);
        $kat->nm_kat = $request->nm_kat;
        $kat->save();

        return redirect('/kategori/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kat = Kategori::find($id);
        $kat->delete();

        return redirect('/kategori/');
    }
}
