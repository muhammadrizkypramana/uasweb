@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Add Data Makul
                </div>

                <div class="card-body">
                    <form action="{{ route('simpan_makul') }}" method="post">
                    @csrf
                        <div class="form-group">
                            <div class="form-row">
                            <div class="col">
                                <label for="kode_makul">Kode Makul</label>
                                <input type="text" name="kode_makul" class="form-control" placeholder="Masukkan Kode Makul">
                            </div>
                            <div class="col">
                                <label for="nama_makul">Nama Makul</label>
                                <input type="text" name="nama_makul" class="form-control" placeholder="Masukkan Nama Makul">
                            </div>
                            <div class="col">
                                <label for="sks">SKS</label>
                                <input type="number" min="1" max="3" name="sks" class="form-control" placeholder="Masukkan Jumlah SKS">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <a href="{{ route('makul') }}" class="btn btn-md btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-md btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
