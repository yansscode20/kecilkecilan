<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyewa;

class PenyewaController extends Controller
{

    public function index()
    {
        $penyewa = Penyewa::all();
        return view('penyewa.index', compact('penyewa'));
    }

    public function create()
    {
        return view('penyewa.create');
    }

    public function store(Request $request)
    {
        Penyewa::create($request->all());
        return redirect('/penyewa');
    }

    public function edit($id)
    {
        $penyewa = Penyewa::find($id);
        return view('penyewa.edit', compact('penyewa'));
    }

    public function update(Request $request, $id)
    {
        $penyewa = Penyewa::find($id);
        $penyewa->update($request->all());

        return redirect('/penyewa');
    }

    public function destroy($id)
    {
        $penyewa = Penyewa::find($id);
        $penyewa->delete();

        return redirect('/penyewa');
    }

}