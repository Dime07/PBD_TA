<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawancuti;

class CutiController extends Controller
{
    public function index(){
    	$karyawancuti= Karyawancuti::all();
    	return view('cuti', [
            'karyawancuti' => $karyawancuti,

        ]);
    }
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'nama_lengkap' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'tanggalmulai' => 'required|max:255',
            'tanggalakhir' => 'required|max:255',
            'keterangan' => 'required|max:255',
        ]);
        $karyawancuti = Karyawancuti::create($storeData);

        return redirect('/cuti')->with('success', 'Employee created!');
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama_lengkap' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'tanggalmulai' => 'required|max:255',
            'tanggalakhir' => 'required|max:255',
            'keterangan' => 'required|max:255',
        ]);

        Karyawancuti::whereId($id)->update($data);
        return redirect('/cuti')->with('success', 'Employee updated');
    }

    public function destroy($id)
    {
        $karyawancuti = Karyawancuti::findOrFail($id);
        $karyawancuti->delete();

        return redirect('/cuti')->with('success', 'Employee deleted');
    }
}
