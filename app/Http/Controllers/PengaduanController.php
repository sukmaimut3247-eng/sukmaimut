<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function index()
    {
        $pengaduan = Pengaduan::all();

        return view('pengaduan.index', compact('pengaduan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'laporan' => 'required',
        ]);

        Pengaduan::create([
            'nama' => $request->nama,
            'laporan' => $request->laporan,
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
        Pengaduan::find($id)->delete();

        return redirect('/');
    }
}