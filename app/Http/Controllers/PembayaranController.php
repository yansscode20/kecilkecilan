<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = DB::table('pembayaran')
        ->join('penyewa', 'pembayaran.id_penyewa', '=', 'penyewa.id')
        ->select('pembayaran.*', 'penyewa.nama')
        ->get();

        return view('pembayaran.index', compact('pembayaran'));
    }

    public function create()
    {
        $penyewa = DB::table('penyewa')->get();
        return view('pembayaran.create', compact('penyewa'));
    }

    public function store(Request $request)
    {
        DB::table('pembayaran')->insert([
            'id_penyewa' => $request->id_penyewa,
            'tanggal_bayar' => $request->tanggal_bayar,
            'jumlah_bayar' => $request->jumlah_bayar,
            'metode' => $request->metode
        ]);

        return redirect()->route('pembayaran.index');
    }

    public function edit($id)
    {
        $pembayaran = DB::table('pembayaran')->where('id', $id)->first();
        $penyewa = DB::table('penyewa')->get();

        return view('pembayaran.edit', compact('pembayaran','penyewa'));
    }

    public function update(Request $request, $id)
    {
        DB::table('pembayaran')->where('id', $id)->update([
            'id_penyewa' => $request->id_penyewa,
            'tanggal_bayar' => $request->tanggal_bayar,
            'jumlah_bayar' => $request->jumlah_bayar,
            'metode' => $request->metode
        ]);

        return redirect()->route('pembayaran.index');
    }

    public function destroy($id)
    {
        DB::table('pembayaran')->where('id', $id)->delete();
        return redirect()->route('pembayaran.index');
    }
}