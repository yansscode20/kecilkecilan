<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Penyewa;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahKamar = Kamar::count();
        $jumlahPenyewa = Penyewa::count();

        return view('dashboard.index',compact('jumlahKamar','jumlahPenyewa'));
    }
}