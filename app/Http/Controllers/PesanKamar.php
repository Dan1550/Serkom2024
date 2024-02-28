<?php

namespace App\Http\Controllers;
use Charts;
use App\Models\Kamar;
use Carbon\Carbon;
use Pdf;



use Illuminate\Http\Request;

class PesanKamar extends Controller
{
    public function StoreData(Request $request)
    {
    // validasi data apakah data sudah terisi atau belum 
     $request->validate([
        'nama' => 'required',
        'jenis_kelamin' => 'required',
        'nomorid' => 'required|numeric|digits:16',
        'tipe_kamar' => 'required',
        'harga' => 'required',
        'tanggal_pesan' => 'required',
        'durasi' => 'required|numeric',
     ],[
        'nama.required' => 'Kolom nama wajib diisi.',
        'jenis_kelamin.required' => 'Kolom jenis kelamin wajib diisi.',
        'nomorid.required' => 'Kolom nomor ID wajib diisi.',
        'nomorid.numeric' => 'Kolom nomor ID harus berupa angka.',
        'nomorid.digits' => 'Kolom nomor ID harus terdiri dari 16 angka.',
        'tipe_kamar.required' => 'Kolom tipe kamar wajib diisi.',
        'harga.required' => 'Kolom harga wajib diisi.',
        'tanggal_pesan.required' => 'Kolom tanggal pesan wajib diisi.',
        'durasi.required' => 'Kolom durasi wajib diisi.',
        'durasi.numeric' => 'Kolom durasi harus berupa angka.',
    ]);

    //mengubah format tanggal menjadi tahun bulan hari 
    $tanggal_pesan = Carbon::createFromFormat('d-m-Y', $request->input('tanggal_pesan'))->format('Y-m-d');

    //memanggil nilai session dan menyimpan data ke dalam database
            $tipe_kamar = $request->input('tipe_kamar');
            $harga = $request->input('harga');
            $pesan = Kamar::create([
                'nama' => $request->input('nama'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
                'nomor_identitas' => $request->input('nomorid'),
                'tipe_kamar' => $tipe_kamar,
                'harga' => $harga,
                'tanggal_pesan' => $tanggal_pesan,
                'Durasi' => $request->input('durasi'),
                'total_bayar' => $request->input('total_bayar'),
            ]);
    
            // Kirim variabel $pesan ke view
            return view('Invoice', ['pesan' => $pesan]);
    }

    public function getHarga(Request $request) {
        //menampilkan data dari tabel harga kolom tipe kamar dan harga 
        $tipeKamar = $request->input('tipe_kamar');
    
        // Mengambil harga berdasarkan tipe kamar
        $harga = harga::where('tipe_kamar', $tipeKamar)->value('harga');
    
        return response()->json(['harga' => $harga]);
    }

    public function showInvoice($id)
    {
        //nampilkan data kedalam halaman invoice dan mencetak de dalam PDF
        $pesan = Kamar::find($id);

        $pdf = PDF::loadView('Invoice', compact('pesan'));

        return $pdf->download('invoice.pdf');
    }
  
    public function Chart()
    {
        //menampilkan tabel tipe kamar kedalam chart
        $data = Kamar::select('tipe_kamar', \DB::raw('count(*) as jumlah'))
            ->groupBy('tipe_kamar')
            ->get();

        return response()->json($data); 
    }
}