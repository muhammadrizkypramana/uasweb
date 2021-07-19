@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Data Nilai
                </div>

                <div class="card-body">
                    <form action="{{ route('update_nilai', $nilai->id) }}" method="post">
                    @csrf
                        <div class="form-group">
                            <div class="form-row">
                            <div class="col">

                                <label for="makul_id">Nama Makul</label>
                                <select class="form-control" name="makul_id" required="required">
                                <option value="{{ is_null ($nilai) ? '' : $nilai->makul_id }}" selected readonly>{{ is_null ($nilai) ? '' : $nilai->makul->nama_makul }}</option>
                                @foreach ($makul as $mk)
                                <option value="{{ $mk->id }}">{{ $mk->nama_makul }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="col">

                                <label for="mahasiswa_id">Nama Mahasiswa</label>
                                <select class="form-control" name="mahasiswa_id" required="required">
                                <option value="{{ is_null ($nilai) ? '' : $nilai->mahasiswa_id }}" selected readonly>{{ is_null ($nilai) ? '' : $nilai->mahasiswa->user->name }}</option>
                                @foreach ($mahasiswa as $mhs)
                                <option value="{{ $mhs->id }}">{{ $mhs->user->name }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="nilai">Nilai</label>
                                <input type="number" min="0" max="100" name="nilai" class="form-control" value="{{ is_null ($nilai) ? '' : $nilai->nilai }}">
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
