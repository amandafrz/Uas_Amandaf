<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $sup = Supplier::all();
        return view('supplier.index',compact('nomor','sup'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sup = new Supplier;
        $sup->kode = $request->kode;
        $sup->nm_sup = $request->nm_sup;
        $sup->alamat = $request->alamat;
        $sup->hp = $request->hp;
        $sup->save();

        return redirect('/supplier/');
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
        $sup = Supplier::find($id);
        return view('supplier.edit',compact('sup'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sup = Supplier::find($id);
        $sup->kode = $request->kode;
        $sup->nm_sup = $request->nm_sup;
        $sup->alamat = $request->alamat;
        $sup->hp = $request->hp;
        $sup->save();

        return redirect('/supplier/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sup = Supplier::find($id);
        $sup->delete();

        return redirect('/supplier/');
    }
}
