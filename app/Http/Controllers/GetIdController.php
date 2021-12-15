<?php

namespace App\Http\Controllers;

use App\Models\DataKost;
use App\Models\DataPengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetIdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showbyId(Request $request){
        $id = $request->id;
        // $alamat = $request->alamat;
        // $jumlahkamar = $request->jumlahkamar;
        // $harga = $request->harga;

        return DataPengguna::find($id);
        // $kost->alamat = $alamat;
        // $kost->jumlahkamar = $jumlahkamar;
        // $kost->harga = $harga;

    }
}
