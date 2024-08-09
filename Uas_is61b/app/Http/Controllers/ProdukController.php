<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pro = Produk::all();
        return view('produk.index', compact('nomor', 'pro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kat = Kategori::all();
        return view('produk.form',compact('kat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pro = new Produk;
        $pro->kode = $request->kode;
        $pro->nm_produk = $request->nm_produk;
        $pro->kategoris_id = $request->kategori;
        $pro->merk= $request->merk;
        $pro->hargaa = $request->hargaa;
        $pro->stock = $request->stock;
        $pro->save();

        return redirect('/produk/');
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
        $pro = Produk::find($id);
        return view('produk.edit',compact('pro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pro = Produk::find($id);
        $pro->nm_produk = $request->nm_produk;
        $pro->merk= $request->merk;
        $pro->hargaa = $request->hargaa;

        $pro->stock = $request->stock;
        $pro->save();

        return redirect('/produk/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pro = Produk::find($id);
        $pro->delete();

        return redirect('/produk/');
    }
}


