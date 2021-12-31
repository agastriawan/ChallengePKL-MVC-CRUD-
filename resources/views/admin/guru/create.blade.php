@extends('admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add New Teacher</h1>
    </div>


    <div class="col-lg-8">
        <form method="POST" action="/admin/guru" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="NamaGuru" class="form-label">Nama Guru</label>
                <input type="text" class="form-control @error('NamaGuru') is-invalid @enderror" id="NamaGuru" name="NamaGuru"
                    required autofocus value="{{ old('NamaGuru') }}" autocomplete="off">

                @error('NamaGuru')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                    required value="{{ old('email') }}" autocomplete="off" @error('email') <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
    </div>


    <div class="mb-3">
        <label for="mapel" class="form-label">Mapel</label>
        <select class="form-select @error('mapel') is-invalid @enderror" name="mapel" id="mapel">
            <option value="">--Pilih Mata Pelajaran--</option>
            <option value="Matematika">MTK</option>
            <option value="Bahasa Sunda">Bahasa Sunda</option>
            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
            <option value="Sejarah">Sejarah</option>
            <option value="Ipa">IPA</option>
        </select>

        @error('mapel')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>


    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <img class="img-preview img-fluid mb-3 col-sm-5">
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
            onchange="previewImage()">

        @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>


    {{-- Trix editor --}}
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        @error('alamat')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror
        <input id="alamat" type="hidden" name="alamat" value="{{ old('alamat') }}">
        <trix-editor input="alamat"></trix-editor>
    </div>


    <button type="submit" class="btn btn-primary">Add</button>
    </form>
    </div>



    <script>
        // Matiin file upload di trix
        document.addEventListener('trix-file-accept', function(e) {
            e.preverentDefault()
        })

        // PREVIEW IMAGE
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>

@endsection
