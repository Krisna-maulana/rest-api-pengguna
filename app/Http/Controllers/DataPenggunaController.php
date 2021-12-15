<?php

namespace App\Http\Controllers;

use App\Models\DataPengguna;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;

class DataPenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DataPengguna::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $pengguna = new DataPengguna();
        $pengguna->nama = $request->nama;
        $pengguna->alamat = $request->alamat;
        $pengguna->notelp = $request->notelp;
        $pengguna->save();

        return "Data Pengguna Berhasil Di Tambah";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataPengguna  $dataPengguna
     * @return \Illuminate\Http\Response
     */
    public function show(DataPengguna $dataPengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataPengguna  $dataPengguna
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPengguna $dataPengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataPengguna  $dataPengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $nama = $request->nama;
        $alamat = $request->alamat;
        $notelp = $request->notelp;

        $pengguna = DataPengguna::find($id);
        $pengguna->nama = $nama;
        $pengguna->alamat = $alamat;
        $pengguna->notelp = $notelp;
        $pengguna->save();

        return "Data Pengguna Berhasil Diupdate";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPengguna  $dataPengguna
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $pengguna = DataPengguna::find($id);
        $pengguna->delete();

        return "Data Pengguna Berhasil di Hapus";
    }
}
