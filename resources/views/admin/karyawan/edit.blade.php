@extends('admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Edit Employee</h1>
    </div>


    <div class="col-lg-8">
        <form method="POST" action="/admin/karyawan/{{ $employees->id }}" class="mb-5"
            enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="NamaKaryawan" class="form-label">Nama Guru</label>
                <input type="text" class="form-control @error('NamaKaryawan') is-invalid @enderror" id="NamaKaryawan"
                    name="NamaKaryawan" required autofocus value="{{ old('NamaKaryawan', $employees->NamaKaryawan) }}"
                    autocomplete="off">

                @error('NamaKaryawan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                    required value="{{ old('email', $employees->email) }}" autocomplete="off">

                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="pekerjaan" class="form-label">pekerjaan</label>
                <select class="form-select " name="pekerjaan" id="pekerjaan">
                    @if (old('pekerjaan', $employees->pekerjaan) == $employees->pekerjaan)
                        <option value="{{ $employees->pekerjaan }}" selected>{{ $employees->pekerjaan }}</option>
                        <option value="Tata Usaha">Tata Usaha</option>
                        <option value="Resepsionis">Resepsionis</option>
                        <option value="Sarpas">Sarpas</option>
                        <option value="OB">OB</option>
                    @else
                        <option value="Tata Usaha">Tata Usaha</option>
                        <option value="Resepsionis">Resepsionis</option>
                        <option value="Sarpas">Sarpas</option>
                        <option value="OB">OB</option>
                    @endif
                </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="hidden" name="oldImage" value="{{ $employees->image }}">
                @if ($employees->image)
                    <img class="img-preview img-fluid mb-3 col-sm-5 d-block"
                        src="{{ asset('storage/' . $employees->image) }}">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5 d-block"
                        src="{{ asset('storage/' . $employees->image) }}">
                @endif

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
                <input id="alamat" type="hidden" name="alamat" value="{{ old('alamat', $employees->alamat) }}">
                <trix-editor input="alamat"></trix-editor>
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
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
