@extends('starter')
@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="card" style="width: 1100px">
                <div class="card-body">
                    <h1>Selamat Datang {{ Auth::user()->name }}</h1>
                </div>
            </div>

            <a href="{{url('create-catatan')}}" class="btn btn-success">Isi Catatan Perjalanan</a>
        </div>
    </div>
   
</div>
@endsection