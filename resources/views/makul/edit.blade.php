@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Data Makul
                </div>

                <div class="card-body">
                    <form action="{{ route('update_makul', $makul->id) }}" method="post">
                    @csrf
                        <div class="form-group">
                            <div class="form-row">
                            <div class="col">
                                <label for="kode_makul">Kode Makul</label>
                                <input type="text" name="kode_makul" class="form-control" value="{{ is_null ($makul) ? '' : $makul->kode_makul }}">
                            </div>
                            <div class="col">
                                <label for="nama_makul">Nama Makul</label>
                                <input type="text" name="nama_makul" class="form-control" value="{{ is_null ($makul) ? '' : $makul->nama_makul }}">
                            </div>
                            <div class="col">
                                <label for="sks">SKS</label>
                                <input type="number" min="1" max="3" name="sks" class="form-control" value="{{ is_null ($makul) ? '' : $makul->sks }}">
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
