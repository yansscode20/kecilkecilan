<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluhan;
use App\Models\Penyewa;

class KeluhanController extends Controller
{

    public function index()
    {
        $keluhan = Keluhan::all();
        return view('keluhan.index', compact('keluhan'));
    }

    public function create()
    {
        $penyewa = Penyewa::all();
        return view('keluhan.create', compact('penyewa'));
    }

    public function store(Request $request)
    {
        Keluhan::create($request->all());
        return redirect('/keluhan');
    }

}