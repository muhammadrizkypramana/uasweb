<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Alert;

use App\Exports\MahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    public function export_excel()
    {
        return Excel::download(new MahasiswaExport, 'Mahasiswa.xlsx');
    }

    public function index()
    {
        $mahasiswa = Mahasiswa::with('user')->get()->sortBy('user.name'); //select * from mahasiswa
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function add()
    {
        $user = User::get()->sortBy('name'); //select * from mahasiswa
        return view('mahasiswa.create', compact('user'));
    }

    public function save(Request $request){
    
        Mahasiswa::create($request->all());
        alert()->success('Selamat!','Berhasil menyimpan data.');
        return redirect()->route('mahasiswa');
    }

    public function edit($id){
        $user = User::get()->sortBy('name'); //select * from mahasiswa
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa', 'user'));
    }

    public function update(Request $request, $id){
    
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        alert()->success('Selamat!','Berhasil mengedit data.');
        return redirect()->route('mahasiswa');
    }

    public function delete(Request $request, $id){
    
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        alert()->success('Selamat!','Berhasil menghapus data.');
        return redirect()->route('mahasiswa');
    }
}

