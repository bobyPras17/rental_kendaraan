<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengembalian</title>
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
                <i class="bi bi-arrow-return-left me-2"></i>
                Data Pengembalian
            </h4>

            <a href="{{ route('pengembalian.create') }}"
               class="btn btn-light btn-sm fw-semibold">
                <i class="bi bi-plus-circle-fill me-1"></i>
                Tambah Pengembalian
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
                                <i class="bi bi-receipt me-1"></i>
                                ID Transaksi
                            </th>

                            <th>
                                <i class="bi bi-calendar-check-fill me-1"></i>
                                Tanggal Dikembalikan
                            </th>

                            <th>
                                <i class="bi bi-cash-coin me-1"></i>
                                Denda
                            </th>

                            <th width="180" class="text-center">
                                <i class="bi bi-gear-fill me-1"></i>
                                Aksi
                            </th>
                        </tr>

                    </thead>

                    <tbody>

                        @foreach ($pengembalian as $p)

                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            <td class="fw-semibold">
                                {{ $p->transaksi_id }}
                            </td>

                            <td>{{ $p->tgl_dikembalikan }}</td>

                            <td>
                                Rp {{ number_format($p->denda, 0, ',', '.') }}
                            </td>

                            <td class="text-center">

                                <a href="{{ route('pengembalian.edit', $p->id) }}"
                                   class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>

                                <form action="{{ route('pengembalian.destroy', $p->id) }}"
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



