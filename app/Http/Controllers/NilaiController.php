<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Mahasiswa;
use App\Models\Makul;
use Illuminate\Http\Request;
Use Alert;


use App\Exports\NilaiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class NilaiController extends Controller
{
    public function export_excel()
    {
        return Excel::download(new NilaiExport, 'Nilai.xlsx');
    }

    public function index()
    {
        $nilai = Nilai::with('makul', 'mahasiswa')->get()->sortBy('mahasiswa.user.name'); //select * from mahasiswa
        return view('nilai.index', compact('nilai'));
    }

    public function add()
    {
        $makul = Makul::get()->sortBy('nama_makul'); //select * from mahasiswa
        $mahasiswa = Mahasiswa::with('user')->get()->sortBy('user.name'); //select * from mahasiswa
        return view('nilai.create', compact('makul', 'mahasiswa'));
    }

    public function save(Request $request){
        Nilai::create($request->all());
        alert()->success('Selamat!','Berhasil menyimpan data.');
        return redirect()->route('nilai');
    }

    public function edit($id){
        $makul = Makul::get()->sortBy('nama_makul'); //select * from mahasiswa
        $mahasiswa = Mahasiswa::with('user')->get()->sortBy('user.name'); //select * from mahasiswa
        $nilai = Nilai::find($id);
        return view('nilai.edit', compact('nilai', 'makul', 'mahasiswa'));
    }

    public function update(Request $request, $id){
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        alert()->success('Selamat!','Berhasil mengedit data.');
        return redirect()->route('nilai');
    }

    public function delete(Request $request, $id){
        $nilai = Nilai::find($id);
        $nilai->delete();
        alert()->success('Selamat!','Berhasil menghapus data.');
        return redirect()->route('nilai');
    }
}
