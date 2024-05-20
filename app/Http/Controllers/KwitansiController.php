<?php

namespace App\Http\Controllers;
use App\Models\Kwitansi;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class KwitansiController extends Controller
{
    public function index(): View
    {
        $dataKwitansi = Kwitansi::latest()->paginate(10);
        return view('kwitansi.index', compact('dataKwitansi'));
    }

    public function create(): View
    {
        return view('kwitansi.create');
    }

    public function store(Request $request): RedirectResponse
    {

        //validate form
        $request->validate([
            'id_kwitansi'    => 'required',
            'tgl_kwitansi'          => 'required',
        ]);

        Kwitansi::create([
            'id_kwitansi'    => $request->id_kwitansi,
            'tgl_kwitansi'          => $request->tgl_kwitansi,
        ]);
        //redirect to index
        return redirect()->route('kwitansi.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit($id_kwitansi): View
    {
        $dataKwitansi = Kwitansi::findOrFail($id_kwitansi);
        return view('kwitansi.edit', compact('dataKwitansi'));
    }

    public function show($id_kwitansi): View
    {
        $kwitansi = Kwitansi::findOrFail($id_kwitansi);

        return view('kwitansi.show', compact('kwitansi'));
    }
    public function update(Request $request, $id_kwitansi): RedirectResponse
    {
        //validate form
        $request->validate([
            'id_kwitansi'    => 'required',
            'tgl_kwitansi'          => 'required',
        ]);

        $kwitansi = Kwitansi::findOrFail($id_kwitansi);
        $kwitansi->update([
            'id_kwitansi'     => $request->id_kwitansi,
            'tgl_kwitansi'  => ($request->tgl_kwitansi),
    
        ]);

        return redirect()->route('kwitansi.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id_kwitansi): RedirectResponse
    {
        $kwitansi = Kwitansi::findOrFail($id_kwitansi);
        $kwitansi->delete();
        return redirect()->route('kwitansi.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}


