@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Add Data Nilai
                </div>

                <div class="card-body">
                    <form action="{{ route('simpan_nilai') }}" method="post">
                    @csrf
                        <div class="form-group">
                            <div class="form-row">
                            <div class="col">
                                <label for="makul_id">Nama Makul</label>
                                <select class="form-control" name="makul_id" required="required">
                                <option value="0" selected disabled>Pilih Makul</option>
                                @foreach ($makul as $mk)
                                <option value="{{ $mk->id }}"> {{ $mk->nama_makul }}</option>
                                @endforeach
                                </select>
                            </div>
                            
                            <div class="col">
                                <label for="mahasiswa_id">Nama Mahasiswa</label>
                                <select class="form-control" name="mahasiswa_id" required="required">
                                <option value="0" selected disabled>Pilih Mahasiswa</option>
                                @foreach ($mahasiswa as $mhs)
                                <option value="{{ $mhs->id }}"> {{ $mhs->user->name }}</option>
                                @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <label for="nilai">Nilai</label>
                                <input type="number" min="0" max="100" name="nilai" class="form-control" placeholder="Masukkan Jumlah Nilai">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <a href="{{ route('nilai') }}" class="btn btn-md btn-secondary">Cancel</a>
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
