<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    protected $table = 'penyewa';

    protected $fillable = [
        'nama',
        'no_hp',
        'kamar_id',
        'tanggal_masuk'
    ];
}