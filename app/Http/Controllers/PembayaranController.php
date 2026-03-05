<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Penyewa;

class PembayaranController extends Controller
{

    public function index()
    {
        $pembayaran = Pembayaran::all();
        return view('pembayaran.index', compact('pembayaran'));
    }

    public function create()
    {
        $penyewa = Penyewa::all();
        return view('pembayaran.create', compact('penyewa'));
    }

    public function store(Request $request)
    {
        Pembayaran::create($request->all());
        return redirect('/pembayaran');
    }

}