<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan</title>
    <style>
        .card {
    border-radius: 15px;
}

.table tbody tr:hover {
    background-color: #f8f9fa;
    transition: 0.2s;
}

.btn {
    border-radius: 8px;
}
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div class="card shadow border-0 rounded-4">

        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center py-3">

            <h4 class="mb-0">
                <i class="bi bi-people-fill me-2"></i>
                Data Pelanggan
            </h4>

            <a href="{{ route('pelanggan.create') }}"
               class="btn btn-light btn-sm fw-semibold">
                <i class="bi bi-plus-circle-fill me-1"></i>
                Tambah Pelanggan
            </a>

        </div>

        <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>
                    {{ session('success') }}

                <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
                </button>
            </div>
            @endif

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr>
                            <th width="60">No</th>
                            <th>
                                <i class="bi bi-person-fill me-1"></i>
                                Nama
                            </th>
                            <th>
                                <i class="bi bi-telephone-fill me-1"></i>
                                No HP
                            </th>
                            <th>
                                <i class="bi bi-geo-alt-fill me-1"></i>
                                Alamat
                            </th>
                            <th>
                                <i class="bi bi-credit-card-2-front-fill me-1"></i>
                                No KTP
                            </th>
                            <th width="180" class="text-center">
                                <i class="bi bi-gear-fill me-1"></i>
                                Aksi
                            </th>
                        </tr>

                    </thead>

                    <tbody>

                        @foreach($pelanggan as $p)

                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            <td class="fw-semibold">
                                {{ $p->nama }}
                            </td>

                            <td>{{ $p->no_hp }}</td>

                            <td>{{ $p->alamat }}</td>

                            <td>{{ $p->ktp }}</td>

                            <td class="text-center">

                                <a href="{{ route('pelanggan.edit', $p->id) }}"
                                   class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>

                                <form action="{{ route('pelanggan.destroy', $p->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data?')">
                                        <i class="bi bi-trash-fill"></i> Delete
                                    </button>

                                </form>

                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection
</body>
</html>