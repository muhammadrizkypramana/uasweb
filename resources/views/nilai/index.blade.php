@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Nilai
                </div>

                <div class="card-body">
                <br>
                    <div class="table-responsive">
                    <a href="{{ route('export_nilai') }}" target="_blank" class="btn btn-success btn-md float-left">Export Excel</a><br><br>
                        <table class="table table-bordered table-hover">
                            <tr class="bg-light">
                                <th style="text-align:center;">ID</th>
                                <th>NPM</th>
                                <th>NAMA LENGKAP</th>
                                <th>NAMA MAKUL</th>
                                <th>SKS</th>
                                <th>NILAI</th>
                                <th style="width:150px; text-align:center;">Aksi</th>
                            </tr>
                            @foreach ($nilai as $nil)  
                            <tr>
                                <td style="text-align:center;">{{ $nil->id }}</td>
                                <td>{{ $nil->mahasiswa->npm }}</td>
                                <td>{{ $nil->mahasiswa->user->name }}</td>
                                <td>{{ $nil->makul->nama_makul }}</td>
                                <td>{{ $nil->makul->sks }}</td>
                                <td>{{ $nil->nilai }}</td>
                                <td style="text-align:center;">
                                    <a href="{{ route('edit_nilai', $nil->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('hapus_nilai', $nil->id) }}" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <a href="{{ route('tambah_nilai') }}" class="btn btn-primary btn-md float-right">Add Data</a><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
