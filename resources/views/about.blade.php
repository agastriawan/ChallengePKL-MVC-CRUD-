@extends('layouts.main')

@section('container')

    <div class="container justify-content-center">
        <div class="row justify-content-center bg-transparent border-0">

            <div class="col-md-8 mb-3">
                <div class="card bg-transparent border-0">

                    <center><img src="img/{{ $image }}" width="200px" alt="{{ $nama }}"
                            class="img-fluid rounded-circle justify-content-center "></center>
                    <div class="card-body">
                        <h1 class="card-title text-center text-muted">Vocational High School Student</h5>
                            <h3 class="text-center">{{ $nama }}</h3>
                            <p class="card-text text-center">Saya adalah seorang yang menyukai tantangan, mempunyai
                                ketertarikan dibidang teknologi, dan mempunyai mimpi besar sebagai seorang pengusaha. Selalu
                                berusaha untuk menjadi orang yang bermanfaat dan dapat dipercaya orang lain.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <center>
        <div class="container">
            <div class="row">
                <div class="col-md-2"> </div>
                <div class="col-md-2">
                    <a href="https://www.instagram.com/agastriawan/" class="text-decoration-none text-dark "> <i
                            class="bi bi-instagram"></i>
                        <br>
                        agastriawan</a>
                </div>
                <div class="col-md-2">
                    <a href="https://twitter.com/Agasssu" class="text-decoration-none text-dark "> <i
                            class="bi bi-twitter"></i>
                        <br>
                        Agasssu</a>
                </div>
                <div class="col-md-2">
                    <i class="bi bi-envelope-open"></i>
                    <br>
                    agastriawan55@gmail.com
                </div>
                <div class="col-md-2">
                    <a href="https://github.com/Agasssu" class="text-decoration-none text-dark "> <i
                            class="bi bi-github"></i>
                        <br>
                        Agasssu</a>
                </div>
            </div>

        </div>
    </center>

@endsection
