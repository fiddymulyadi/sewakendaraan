<?php

namespace App\Http\Controllers;

use App\Models\penyewa;
use App\Models\Sewa;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class SewaController extends Controller
{
    public function index(): View
    {
        $dataSewa = sewa::latest()->paginate(10);
        return view('sewa.index', compact('dataSewa'));
    }

   

    public function create(): View
    {

        $dataPenyewa = Penyewa::all();
        return view('sewa.create', compact('dataPenyewa'));
    }

    public function store(Request $request): RedirectResponse
    {
      
        //validate form
        $request->validate([
            'no_pol' => 'required',
            'tgl_sewa' => 'required',
            'tgl_selesai' => 'required',
            'tlp_tujuan' => 'required',
            'alamat_tujuan' => 'required',
            'biaya_sewa' => 'required',
            'id_penyewa' => 'required',
            'kota' => 'required',
            'jlh_penumpang' => 'required',
        ]);

        Sewa::create([
            'no_pol' => $request->no_pol,
            'tgl_sewa' => $request->tgl_sewa,
            'tgl_selesai' => $request->tgl_selesai,
            'tlp_tujuan' => $request->tlp_tujuan,
            'alamat_tujuan' => $request->alamat_tujuan,
            'biaya_sewa' => $request->biaya_sewa,
            'id_penyewa' => $request->id_penyewa,
            'kota' => $request->kota,
            'jlh_penumpang' => $request->jlh_penumpang,
        ]);
        //redirect to index
        return redirect()->route('sewa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $sewa = Sewa::findOrFail($id);

        return view('sewa.show', compact('sewa'));
    }

    public function edit(string $id): View
    {
        $sewa = Sewa::findOrFail($id);

        return view('sewa.edit', compact('sewa'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'id_sewa' => 'required|min:5',
            'no_pol' => 'required|min:5',
            'tgl_sewa' => 'required|min:5',
            'tgl_selesai' => 'required|min:5',
            'tlp_tujuan' => 'required|min:5',
            'alamat_tujuan' => 'required|min:5',
            'biaya_sewa' => 'required|min:5',
            'kota' => 'required|min:5',
            'id_penyewa' => 'required|min:5',
            'jlh_penumpang' => 'required|min:5',
            'id_kwitansi' => 'required|min:5'

        ]);

        $sewa = Sewa::findOrFail($id);
        $sewa->update([
            'id_sewa' => $request->id_sewa,
            'no_pol' => $request->no_pol,
            'tgl_sewa' => $request->tgl_sewa,
            'tgl_selesai' => $request->tgl_selesai,
            'tlp_tujuan' => $request->tlp_tujuan,
            'biaya_sewa' => $request->biaya_sewa,
            'kota' => $request->kota,
            'id_penyewa' =>$request->id_penyewa,
            'jlh_penumpang' => $request->jlh_penumpang,
            'id_kwitansi' =>$request->id_kwitansi
            ]);

        return redirect()->route('sewa.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $sewa = Sewa::findOrFail($id);
        $sewa->delete();
        return redirect()->route('sewa.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
