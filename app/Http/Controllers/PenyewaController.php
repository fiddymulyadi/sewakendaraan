<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    public function index(): View
    {
        $dataPenyewa = Penyewa::latest()->paginate(10);
        return view('penyewa.index', compact('dataPenyewa'));
    }

    public function create(): View
    {
        return view('penyewa.create');
    }

    public function store(Request $request): RedirectResponse
    {

        //validate form
        $request->validate([
            'nama_penyewa'    => 'required',
            'alamat'          => 'required',
            'no_hp'           => 'required'
        ]);

        Penyewa::create([
            'nama_penyewa'    => $request->nama_penyewa,
            'alamat'          => $request->alamat,
            'no_hp'           => $request->no_hp,
        ]);
        //redirect to index
        return redirect()->route('penyewa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit($id_penyewa): View
    {
        $dataPenyewa = Penyewa::findOrFail($id_penyewa);
        return view('penyewa.edit', compact('dataPenyewa'));
    }

    public function show($id_penyewa): View
    {
        $penyewa = Penyewa::findOrFail($id_penyewa);

        return view('penyewa.show', compact('penyewa'));
    }
    public function update(Request $request, $id_penyewa): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_penyewa'    => 'required',
            'alamat'          => 'required',
            'no_hp'           => 'required'
        ]);

        $penyewa = Penyewa::findOrFail($id_penyewa);
        $penyewa->update([
            'nama_penyewa'     => $request->nama_penyewa,
            'alamat'  => ($request->alamat),
            'no_hp'     => $request->no_hp
        ]);

        return redirect()->route('penyewa.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id_penyewa): RedirectResponse
    {
        $penyewa = Penyewa::findOrFail($id_penyewa);
        $penyewa->delete();
        return redirect()->route('penyewa.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
