<?php

namespace App\Http\Controllers;

use App\Models\harga;
use Illuminate\Http\Request;

class HargaKamar extends Controller
{
    
    public function HargaKamar()
    {
       //menampilkan data tabel yang ada di tabel harga
        $DataHarga = harga::all();

        return view('Home', ['DataHarga' => $DataHarga]);

    }

    public function HargaKamar_Room()
    {
       //menampilkan data tabel yang ada di tabel harga
        $DataHarga = harga::all();

        return view('Kamar', ['DataHarga' => $DataHarga]);

    }
    
    public function HargaKamar_Pesan()
    {
       //menampilkan data tabel yang ada di tabel harga
        $DataHarga = harga::all();

        return view('PesanKamar', ['DataHarga' => $DataHarga]);

    }

    public function DataKamar()
    {
       //membuat sesi untuk menampilkan di halaman form pemesanan
        session(['tipe_kamar' => $request->input('tipe_kamar')]);
        session(['harga' => $request->input('harga')]);

    }
   
}
