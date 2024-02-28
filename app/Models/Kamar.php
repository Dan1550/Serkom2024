<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'pemesanan';
    protected $fillable = [
        'nama', 
        'jenis_kelamin', 
        'nomor_identitas', 
        'tipe_kamar', 
        'harga',
        'tanggal_pesan',
        'Durasi',
        'discount',
        'total_bayar',
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($kamar) {
            // Set the default value for 'discount' if not provided
            $kamar->discount = $kamar->discount ?? 10; // Default to 10% if 'discount' is not provided
        });
    }

}
