<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;

class KamarController extends Controller
{

    public function index()
    {
        $kamar = Kamar::all();
        return view('kamar.index',compact('kamar'));
    }

    public function create()
    {
        return view('kamar.create');
    }

    public function store(Request $request)
    {
        Kamar::create($request->all());
        return redirect('/kamar');
    }

    public function edit($id)
    {
        $kamar = Kamar::find($id);
        return view('kamar.edit',compact('kamar'));
    }

    public function update(Request $request,$id)
    {
        $kamar = Kamar::find($id);
        $kamar->update($request->all());

        return redirect('/kamar');
    }

    public function destroy($id)
    {
        $kamar = Kamar::find($id);
        $kamar->delete();

        return redirect('/kamar');
    }

}