<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\Kwitansi;
use App\Models\penyewa;

class invoiceController extends Controller
{
    public function index()
    {
        $data = Invoice::latest()->paginate(10);
        return view('invoice.index', compact('data'));
    }

    public function create()
    {

        $dataPenyewa = Penyewa::all();
        $kwitansi = Kwitansi::all();
        $kendaraan = Kendaraan::all();

        return view('invoice.create', compact('dataPenyewa','kwitansi','kendaraan'));
    }

    public function store(Request $request)
    {
      
        $request->validate([
            'id_kwitansi' => 'required',
            'id_penyewa' => 'required',
            'no_pol' => 'required',
        ]);

        Invoice::create([
            'id_kwitansi' => $request->id_kwitansi,
            'id_penyewa' => $request->id_penyewa,
            'no_pol' => $request->no_pol,
        ]);

        return redirect()->route('invoice.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id)
    {
        $Invoice = Invoice::findOrFail($id);
        $kwitansi = Kwitansi::all();
        $dataPenyewa = Penyewa::all();
        $kendaraan = Kendaraan::all();
        return view('invoice.edit', compact('Invoice','dataPenyewa','kwitansi','kendaraan'));
    }

    public function update(Request $request, $id)
    {
      
        $request->validate([
            'id_kwitansi' => 'required',
            'id_penyewa' => 'required',
            'no_pol' => 'required',
        ]);

        $Invoice = Invoice::findOrFail($id);
        $Invoice->update([
            'id_kwitansi' => $request->id_kwitansi,
            'id_penyewa' => $request->id_penyewa,
            'no_pol' => $request->no_pol,
        ]);

        return redirect()->route('invoice.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id)
    {
        $Invoice = Invoice::findOrFail($id);
        $Invoice->delete();
        return redirect()->route('invoice.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
