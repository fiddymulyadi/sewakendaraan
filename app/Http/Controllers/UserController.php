<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index()
    {
        $data = User::latest()->paginate(10);
        return view('users.index', compact('data'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
      
        $request->validate([
            'level' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required'],
        ]);

        User::create([
            'level' => $request->level,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('users.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id)
    {
        $User = User::findOrFail($id);
        return view('users.edit', compact('User'));
    }

    public function update(Request $request, $id)
    {
      
        $request->validate([
            'level' => 'required',
            'name' => 'required',
        ]);

        $User = User::findOrFail($id);
        $User->update([
            'level' => $request->level,
            'name' => $request->name,
        ]);

        return redirect()->route('users.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id)
    {
        $User = User::findOrFail($id);
        $User->delete();
        return redirect()->route('users.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
