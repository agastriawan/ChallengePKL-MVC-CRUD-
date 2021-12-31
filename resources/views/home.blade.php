@extends('layouts.main')

@section('container')

    <h1 class="text-center text- mb-3">Profile Guru, Siswa, & Karyawan</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="/guru">
                    <div class="card bg-dark text-white">
                        <img src="https://cdn.pixabay.com/photo/2016/03/26/17/45/teacher-1280966_960_720.jpg"
                            class="card-img" alt="">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3"
                                style="background-color: rgb(192,192,192, 0.7)">
                                Guru
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/siswa">
                    <div class="card bg-dark text-white">
                        <img src="https://cdn.pixabay.com/photo/2020/01/22/09/39/teacher-4784916_960_720.jpg" alt=""
                            class="card-img">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3"
                                style="background-color: rgb(192,192,192, 0.7)">
                                Siswa/i
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/karyawan">
                    <div class="card bg-dark text-white">
                        <img src="https://cdn.pixabay.com/photo/2021/02/03/00/10/receptionists-5975962_960_720.jpg" alt=""
                            class="card-img">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3"
                                style="background-color: rgb(192,192,192, 0.7)">
                                Karyawan
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
