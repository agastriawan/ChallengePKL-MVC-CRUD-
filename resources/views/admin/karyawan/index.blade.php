@extends('admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Karyawan</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-info col-lg-10" role="alert">
            {{ session('success') }}
        </div>
    @endif


    <div class="table-responsive col-lg-10">
        <a href="/admin/karyawan/create" class="btn btn-primary mb-3">Insert</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employee as $empl)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $empl->NamaKaryawan }}</td>
                        <td>{{ $empl->pekerjaan }}</td>
                        <td>
                            <a href="/admin/karyawan/{{ $empl->id }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>

                            <a href="/admin/karyawan/{{ $empl->id }}/edit" class="badge bg-success"><span
                                    data-feather="edit"></span>
                            </a>

                            {{-- DELETE --}}
                            <form action="/admin/karyawan/{{ $empl->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Anda yakin ingin menghapus data?')"><span
                                        data-feather="trash-2"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{-- PAGINATION --}}
            {{ $employee->links() }}
        </div>
    </div>


@endsection
