@extends('admin.layouts.main')

@section('container')
    <div class="container">
        <div class="row  my-5">
            <div class="col-lg-8">
                <h1 class="mb-3">Detail Karyawan</h1>
                <a href="/admin/karyawan" class="btn btn-warning"><span data-feather="arrow-left"></span> Back</a>
            </div>
        </div>
    </div>


    <div class="container justify-content-center">
        <div class="row justify-content-center bg-transparent border-0">

            <div class="col-md-3 mb-3">
                <div class="card bg-transparent">

                    <center>
                        <img src="{{ asset('storage/' . $employees->image) }}" class="img-fluid  justify-content-center">
                        <div class="card-body">
                            <h3 class="text-center">{!! $employees->NamaKaryawan !!}</h3>
                            <p class="card-title"> <b class="text-muted"> Pekerjaan :</b> <br>
                                {{ $employees->pekerjaan }}</p>
                            <p class="card-title"> <b class="text-muted"> Email :</b> <br>{{ $employees->email }}
                            </p>
                            <p class="card-title"> <b class="text-muted"> Alamat :</b> {!! $employees->alamat !!}</p>
                        </div>
                    </center>

                @endsection
