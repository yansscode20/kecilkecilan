<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';

    protected $fillable = [
        'penyewa_id',
        'bulan',
        'tanggal_bayar',
        'status'
    ];
}