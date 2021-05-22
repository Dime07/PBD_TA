<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class HomeController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('home', [
            'karyawan' => $karyawan,

        ]);
    }

    public function store(Request $request)
    {
        $storeData = $request->validate([
            'nama_lengkap' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'asal' => 'required|max:255',
            'umur' => 'required|numeric',
            'kontrak' => 'required|max:255',
            'gaji' => 'required|max:255',
        ]);
        $karyawan = Karyawan::create($storeData);

        return redirect('/')->with('success', 'Employee created!');
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama_lengkap' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'asal' => 'required|max:255',
            'umur' => 'required|numeric',
            'kontrak' => 'required|max:255',
            'gaji' => 'required|max:255',
        ]);

        Karyawan::whereId($id)->update($data);
        return redirect('/')->with('success', 'Employee updated');
    }

    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();

        return redirect('/')->with('success', 'Employee deleted');
    }
}
