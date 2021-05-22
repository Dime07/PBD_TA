<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class LandingController extends Controller
{
    //
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('landing', [
            'karyawan' => $karyawan,

        ]);
    }
}
