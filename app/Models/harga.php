<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class harga extends Model
{
    protected $table = 'harga';
    protected $fillable = [
        'tipe_kamar', 
        'harga', 
    ];

}
