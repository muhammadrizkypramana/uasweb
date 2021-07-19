<?php

namespace App\Http\Controllers;

use App\Models\Makul;
use Illuminate\Http\Request;
Use Alert;

use App\Exports\MakulExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class MakulController extends Controller
{
    public function export_excel()
    {
        return Excel::download(new MakulExport, 'Makul.xlsx');
    }

    public function index()
    {
        $makul = Makul::get()->sortBy('kode_makul'); //select * from mahasiswa
        return view('makul.index', compact('makul'));
    }

    public function add()
    {
        return view('makul.create');
    }

    public function save(Request $request){
        Makul::create($request->all());
        alert()->success('Selamat!','Berhasil menyimpan data.');
        return redirect()->route('makul');
    }

    public function edit($id){
        $makul = Makul::find($id);
        return view('makul.edit', compact('makul'));
    }

    public function update(Request $request, $id){
        $makul = Makul::find($id);
        $makul->update($request->all());
        alert()->success('Selamat!','Berhasil mengedit data.');
        return redirect()->route('makul');
    }

    public function delete(Request $request, $id){
        $makul = Makul::find($id);
        $makul->delete();
        alert()->success('Selamat!','Berhasil menghapus data.');
        return redirect()->route('makul');
    }
}
