@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Mahasiswa
                </div>

                <div class="card-body">
                <br>
                    <div class="table-responsive">
                    <a href="{{ route('export_mahasiswa') }}" target="_blank" class="btn btn-success btn-md float-left">Export Excel</a><br><br>
                    <table class="table table-bordered table-hover">
                            <tr class="bg-light">
                                <th style="text-align:center;">ID</th>
                                <th>NAMA LENGKAP</th>
                                <th>NPM</th>
                                <th>TEMPAT, TANGGAL LAHIR</th>
                                <th>ALAMAT</th>
                                <th>TELEPON</th>
                                <th>JENIS KELAMIN</th>
                                <th style="text-align:center;">AKSI</th>
                            </tr>
                            @foreach ($mahasiswa as $ms)  
                            <tr>
                                <td style="text-align:center;">{{ $ms->id }}</td>
                                <td>{{ $ms->user->name }}</td>
                                <td>{{ $ms->npm }}</td>
                                <td>{{ $ms->tempat_lahir.', '.$ms->tgl_lahir  }}</td>
                                <td>{{ $ms->alamat }}</td>
                                <td>{{ $ms->telepon }}</td>
                                <td>{{ $ms->gender }}</td>
                                <td style="text-align:center;">
                                    <a href="{{ route('edit_mahasiswa', $ms->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('hapus_mahasiswa', $ms->id) }}" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <a href="{{ route('tambah_mahasiswa') }}" class="btn btn-primary btn-md float-right">Add Data</a><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
