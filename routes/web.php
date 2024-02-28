<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanKamar;
use App\Http\Controllers\HargaKamar;
use ConsoleTVs\Charts\Facades\Charts;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home');
})->name('Home');

Route::get('/About', function () {
    return view('About');
});

Route::get('/Room', function () {
    return view('Kamar');
});

Route::get('/PesanKamar', function () {
    return view('PesanKamar');
});

Route::get('/Invoice', function () {
    return view('Invoice');
})->name('Invoice');

Route::get('/', [HargaKamar::class, 'HargaKamar']);
Route::get('Room', [HargaKamar::class, 'HargaKamar_Room']);
Route::get('PesanKamar', [HargaKamar::class, 'HargaKamar_Pesan']);
Route::get('/get-harga', 'PesanKamar@getHarga');
Route::post('pesan-kamar-action', [PesanKamar::class, 'StoreData'])->name('PesanKamar.action');
Route::get('/invoice/{id}', [PesanKamar::class, 'showInvoice'])->name('invoice.show');
Route::get('/grafik-pemesanan', [PesanKamar::class, 'Chart']);
