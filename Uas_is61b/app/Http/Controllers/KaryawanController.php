<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $kar = Karyawan::all();
        return view('karyawan.index',compact('nomor','kar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('karyawan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kar = new Karyawan;
        $kar->kode = $request->kode;
        $kar->nm_kar = $request->nm_kar;
        $kar->save();

        return redirect('/karyawan/');
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
        $kar = Karyawan::find($id);
        return view('karyawan.edit',compact('kar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kar = Karyawan::find($id);
        $kar->nm_kar = $request->nm_kar;
        $kar->save();

        return redirect('/karyawan/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kar = Karyawan::find($id);
        $kar->delete();

        return redirect('/karyawan/');
    }
}
