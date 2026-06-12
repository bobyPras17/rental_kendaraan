<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kendaraan</title>
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

.badge {
    font-size: 0.85rem;
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
                <i class="bi bi-car-front-fill me-2"></i>
                Data Kendaraan
            </h4>

            <a href="{{ route('kendaraan.create') }}"
               class="btn btn-light btn-sm fw-semibold">
                <i class="bi bi-plus-circle-fill me-1"></i>
                Tambah Kendaraan
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
                                <i class="bi bi-upc-scan me-1"></i>
                                No Polisi
                            </th>
                            <th>
                                <i class="bi bi-award-fill me-1"></i>
                                Merk
                            </th>
                            <th>
                                <i class="bi bi-truck-front-fill me-1"></i>
                                Tipe
                            </th>
                            <th>
                                <i class="bi bi-calendar-event-fill me-1"></i>
                                Tahun
                            </th>

                            <th>
                                <i class="bi bi-palette-fill me-1"></i>
                                Warna
                            </th>

                            <th>
                                <i class="bi bi-cash-stack me-1"></i>
                                Harga
                            </th>
                            <th>
                                <i class="bi bi-check-circle-fill me-1"></i>
                                Status
                            </th>
                            <th width="180" class="text-center">
                                <i class="bi bi-gear-fill me-1"></i>
                                Aksi
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($kendaraan as $k)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td class="fw-semibold">
                                {{ $k->no_polisi }}
                            </td>

                            <td>{{ $k->merk }}</td>

                            <td>{{ $k->tipe }}</td>
                            <td>{{ $k->tahun }}</td>
                            <td>{{ $k->warna }}</td>
                            <td>{{ $k->harga_sewa }}</td>
                            <td>
                                @if(strtolower($k->status) == 'disewa')
                                    <span class="badge bg-danger px-3 py-2">
                                    {{ $k->status }}
                                    </span>
                                @else
                                    <span class="badge bg-success px-3 py-2">
                                    {{ $k->status }}
                                    </span>
                                @endif
                            </td>

                            <td class="text-center">

                                <a href="{{ route('kendaraan.edit', $k->id) }}"
                                   class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>

                                <form action="{{ route('kendaraan.destroy', $k->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data?')">
                                        <i class="bi bi-trash-fill"></i>Delete
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