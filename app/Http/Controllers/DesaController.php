<?php

namespace App\Http\Controllers;
use App\Controllers\DB;
use App\Models\kecamatan;
use App\Models\desa;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    
    public function index()
    {
        $desa = desa::with('kecamatan')->get();
        return view('admin.desa.index', compact('desa'));
    }

    
    public function create()
    {
        $kecamatan = kecamatan::all();
        return view ('admin.desa.create', compact('kecamatan'));
    }

    
    public function store(Request $request)
    {
        $desa = new desa;
        $desa->id_kecamatan = $request->id_kecamatan;
        $desa->kode_desa = $request->kode_desa;
        $desa->nama_desa = $request->nama_desa;
        $desa->save();
        return redirect()->route('desa.index')->with(['message' => 'Data desa Berhasil disimpan']);
    }

    
    public function show($id)
    {
        $desa = desa::findOrFail($id);
        $kecamatan = kecamatan::all();
        return view('admin.desa.show', compact('desa','kecamatan'));
    }

    
    public function edit($id)
    {
        $desa = desa::findOrFail($id);
        $kecamatan = kecamatan::all();
        return view('admin.desa.edit', compact('desa', 'kecamatan'))->with(['message' => 'Data desa Berhasil diedit']);
    }

    
    public function update(Request $request,$id)
    {
        $desa = desa::findOrFail($id);
        $desa->id_kecamatan = $request->id_kecamatan;
        $desa->kode_desa = $request->kode_desa;
        $desa->nama_desa = $request->nama_desa;
        $desa->save();
        return redirect()->route('desa.index')->with(['message' => 'Data desa Berhasil disimpan']);
    }

    
    public function destroy($id)
    {
        $desa = desa::findOrFail($id);
        $desa->delete();
        return redirect()->route('desa.index')->with(['message' => 'Data desa Berhasil diHapus']);
    }
}
