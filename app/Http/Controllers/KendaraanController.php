<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraan = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraan'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'no_pol' => 'required|string|max:10|unique:kendaraan',
            'no_mesin' => 'required|string|max:20|unique:kendaraan',
            'jenis_mobil' => 'required|string|in:mpv,city,suv',
            'nama_mobil' => 'required|string|max:40',
            'merk' => 'required|string|in:honda,toyota,daihatsu',
            'kapasitas' => 'required|string|max:5',
            'tarif' => 'required|integer',
        ]);

        Kendaraan::create($validated);
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan created successfully.');
    }

    public function show(Kendaraan $kendaraan)
    {
        return view('kendaraan.show', compact('kendaraan'));
    }

    public function edit(Kendaraan $kendaraan)
    {
        return view('kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, Kendaraan $kendaraan)
    {
        $validated = $request->validate([
            'no_mesin' => 'required|string|max:20|unique:kendaraan,no_mesin,' . $kendaraan->no_pol . ',no_pol',
            'jenis_mobil' => 'required|string|in:mpv,city,suv',
            'nama_mobil' => 'required|string|max:40',
            'merk' => 'required|string|in:honda,toyota,daihatsu',
            'kapasitas' => 'required|string|max:5',
            'tarif' => 'required|integer',
        ]);

        $kendaraan->update($validated);
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan updated successfully.');
    }

    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan deleted successfully.');
    }
}
