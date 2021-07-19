@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Makul
                </div>

                <div class="card-body">
                <br>
                    <div class="table-responsive">
                    <a href="{{ route('export_makul') }}" target="_blank" class="btn btn-success btn-md float-left">Export Excel</a><br><br>
                    <table class="table table-bordered table-hover">
                            <tr class="bg-light">
                                <th style="text-align:center;">ID</th>
                                <th>KODE MAKUL</th>
                                <th>NAMA MAKUL</th>
                                <th>SKS</th>
                                <th style="width:150px; text-align:center;">AKSI</th>
                            </tr>
                            @foreach ($makul as $mk)  
                            <tr>
                                <td style="text-align:center;">{{ $mk->id }}</td>
                                <td>{{ $mk->kode_makul }}</td>
                                <td>{{ $mk->nama_makul }}</td>
                                <td>{{ $mk->sks }}</td>
                                <td style="text-align:center;">
                                    <a href="{{ route('edit_makul', $mk->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('hapus_makul', $mk->id) }}" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <a href="{{ route('tambah_makul') }}" class="btn btn-primary btn-md float-right">Add Data</a><br>          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
