@extends('starter')
@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="card" style="width: 1100px">
                <div class="card-body">
                    <h1 class="text-center fw-10">User</h1>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success" role="alert">{{$message}}</div>
                    @endif

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                                <th scope="col">tanggal</th>
                                <th scope="col">waktu</th>
                                <th scope="col">lokasi</th>
                                <th scope="col">suhu_tubuh</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($datacatatan as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->waktu }}</td>
                                <td>{{ $item->lokasi}}</td>
                                <td>{{ $item->suhu_tubuh }}</td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{url('create-catatan')}}" class="btn btn-success">Tambah</a>
                    </div>
        </div>
    </div>
   
</div>
@endsection