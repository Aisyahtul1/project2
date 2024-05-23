<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Masyarakat;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('masyarakat.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('masyarakat.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mas = new Masyarakat;
        $mas->nik = $request->nik;
        $mas->nama = $request->nama;
        $mas->jenis_kelamin = $request->jenis_kelamin;
        $mas->pekerjaan = $request->pekerjaan;
        $mas->save();

        return redirect('/masyarakat/');
    
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
