<?php

namespace App\Http\Controllers;
use App\Models\Penyewa;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    public function tampilData(string $id):View {

        return view('penyewa.profile',[
        'penyewa' => Penyewa::findOrFail($id)
        ]);
    }

    public function index(): View
    {
       $penyewa = Penyewa::latest()->paginate(5);
       return view('penyewa.index',compact('penyewa'));
    }

    public function create(): View
    {
        return view('penyewa.create');
    }

    public function store(Request $request): RedirectResponse
    {
       
        //validate form
        $request->validate([
            'id_penyewa'      => 'required|min:5|unique:penyewas,id_penyewa',
            'nama_penyewa'    => 'required|min:5',
            'alamat'          => 'required|min:5',
            'no_hp'           => 'required|min:5|unique:penyewas,no_hp'
        ]);

        Penyewa::create([
            'id_penyewa'      => $request->id_penyewa,
            'nama_penyewa'    => $request->nama_penyewa,
            'alamat'          => $request->alamat, 
            'no_hp'           => $request->no_hp,
        ]);
        //redirect to index
        return redirect()->route('customer.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $customer = Penyewa::findOrFail($id);

        return view('customer.show', compact('penyewa'));
    }

    public function edit(string $id): View
    {
        $customer = Penyewa::findOrFail($id);

        return view('customer.edit', compact('penyewa'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'id_penyewa'      => 'required|min:5',
            'nama_penyewa'    => 'required|min:5',
            'alamat'          => 'required|min:5',
            'no_hp'           => 'required|min:5'
        ]);

        $customer = Penyewa::findOrFail($id);
        $customer->update([
                'id_penyewa'  => $request->id_penyewa,
                'nama_penyewa'     => $request->nama_penyewa,
                'alamat'  => md5($request->alamat),
                'no_hp'     => $request->no_hp
            ]);

        return redirect()->route('customer.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $customer = Penyewa::findOrFail($id);
        $customer->delete();
        return redirect()->route('customer.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

     

}