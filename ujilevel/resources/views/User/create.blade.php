@extends('starter')

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('simpan-catatan') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('tanggal')
                            <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div>
                       
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Waktu</label>
                            <input type="time" name="waktu" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('waktu')
                            <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Lokasi</label>
                            <input type="text" name="lokasi" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('lokasi')
                            <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div>
                       
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Suhu</label>
                            <input type="number" name="suhu_tubuh" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('suhu_tubuh')
                            <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
