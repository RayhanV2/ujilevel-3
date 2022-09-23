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
                    <a href="{{url('create-agenda')}}" class="btn btn-success">Tambah</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                                <th scope="col">tanggal</th>
                                <th scope="col">waktu</th>
                                <th scope="col">lokasi</th>
                                <th scope="col">suhu_tubuh</th>
                                <th scope="col">Option</th>
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
                                    <a href="{{ url('/edit-agenda',$item->id) }}"><img src="{{ asset('dist/img/pensiledit.png')}}" alt="" style="width: 15px"></a>
                                    <a href="{{ url('/delete-agenda',$item->id) }}"><img src="{{ asset('dist/img/delete.png')}}" alt="" style="width: 22px"></a>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection