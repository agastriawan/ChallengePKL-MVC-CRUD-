@extends('layouts.main')
@section('container')

    <div class="container">
        <div class="col mb-3">
            <h1 class="mb-3 text-center">Daftar Karyawan</h1>
            <a href="/" class="btn btn-secondary"><i class="bi bi-arrow-left-square"></i> Back </a>
        </div>
        <div class="row">
            @foreach ($employee as $emply)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="position-absolute  px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)">
                            <a href="" class="text-white text-decoration-none">Karyawan</a>
                        </div>

                        <img src="{{ asset('storage/' . $emply->image) }}" alt="{{ $emply->name }}"
                            class="img-fluid" width="400px">

                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $emply->NamaKaryawan }}</h5>
                            <center>
                                <p class="card-title"> <b class="text-muted"> Email :</b> <br>{{ $emply->email }}
                                </p>
                                <p class="card-title"> <b class="text-muted"> Pekerjaan :</b> <br>
                                    {{ $emply->pekerjaan }}</p>
                                <p class="card-title"> <b class="text-muted"> Alamat :</b> {!! $emply->alamat !!}
                                </p>
                            </center>
                        </div>
                    </div>
                </div>


            @endforeach
        </div>
    </div>



@endsection
