<?php

namespace App\Http\Controllers;

use App\Models\mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mobil.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'merek_mobil',
            'model_mobil',
            'plat_mobil',
            'stock_mobil',
            'tarif_sewa',
            'jenis_mobil',
        ]);

        Mobil::create($attributes);

        session()->put('sukses', 'Data has been saved successfully!');
        return redirect()->route('mobil.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(mobil $mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mobil $mobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mobil $mobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mobil $mobil)
    {
        //
    }
}
