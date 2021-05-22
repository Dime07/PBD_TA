<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawanproyek;

class ProyekController extends Controller
{
    public function index(){
    	$karyawanproyek= karyawanproyek::all();
    	return view('proyek', [
            'karyawanproyek' => $karyawanproyek,
        ]);
    }

    public function store(Request $request)
    {
        $storeData = $request->validate([
            'nama_proyek' => 'required|max:255',
            'penanggung_jawab' => 'required|max:255',
            'tenggat_waktu' => 'required|max:255',
            'keterangan' => 'required|max:255',
        ]);
        $karyawanproyek = Karyawanproyek::create($storeData);

        return redirect('/proyek')->with('success', 'Employee created!');
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama_proyek' => 'required|max:255',
            'penanggung_jawab' => 'required|max:255',
            'tenggat_waktu' => 'required|max:255',
            'keterangan' => 'required|max:255',
        ]);

        Karyawanproyek::whereId($id)->update($data);
        return redirect('/proyek')->with('success', 'Employee updated');
    }

    public function destroy($id)
    {
        $karyawanproyek = Karyawanproyek::findOrFail($id);
        $karyawanproyek->delete();

        return redirect('/proyek')->with('success', 'Employee deleted');
    }
}
