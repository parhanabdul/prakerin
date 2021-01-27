<?php

namespace App\Http\Controllers;
use App\Controllers\DB;
use App\Models\rw;
use App\Models\kasus;
use Illuminate\Http\Request;

class KasusController extends Controller
{
    
    public function index()
    {
        $kasus = Kasus::with('rw')->get();
        return view('admin.kasus.index', compact('kasus'));
    }

    
    public function create()
    {
        $rw = Rw::all();
        return view ('admin.kasus.create', compact('rw'));
    }

    
    public function store(Request $request)
    {
        $kasus = new Kasus;
        $kasus->id_rw = $request->id_rw;
        $kasus->positif = $request->positif;
        $kasus->meninggal = $request->meninggal;
        $kasus->sembuh = $request->sembuh;
        $kasus->tanggal = $request->tanggal;
        $kasus->save();
        return redirect()->route('kasus.index')->with(['message' => 'Data Kasus Berhasil disimpan']);
    }

    
    public function show($id)
    {
        $kasus = Kasus::findOrFail($id);
        return view('kasus.show', compact('kasus'));
    }

    
    public function edit($id)
    {
        $kasus = Kasus::findOrFail($id);
        $rw = Rw::all();
        return view('kasus.edit', compact('kasus', 'rw'))->with(['message' => 'Data Kasus Berhasil diedit']);
    }

    
    public function update(Request $request,$id)
    {
        $kasus = Kasus::findOrFail($id);
        $kasus->id_rw = $request->id_rw;
        $kasus->positif = $request->positif;
        $kasus->meninggal = $request->meninggal;
        $kasus->sembuh = $request->sembuh;
        $kasus->tanggal = $request->tanggal;
        $kasus->save();
        return redirect()->route('kasus.index')->with(['message' => 'Data Kasus Berhasil disimpan']);
    }

    
    public function destroy($id)
    {
        $kasus = kasus::findOrFail($id);
        $kasus->delete();
        return redirect()->route('kasus.index')->with(['message' => 'Data kasus Berhasil diHapus']);
    }
}
