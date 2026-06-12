@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <!-- Judul -->
    <div class="mb-4">
        <h2 class="fw-bold">Dashboard Rental Motor</h2>
        <p class="text-muted">
            Selamat datang Admin, di sistem manajemen rental motor.
        </p>
    </div>

    <!-- Card Statistik -->
    <div class="row">

        <div class="col-md-4 mb-4">

            <div class="card border-0 shadow-sm rounded-4">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>
                            <h6 class="text-muted">
                                Total Kendaraan
                            </h6>

                            <h2 class="fw-bold">
                                {{ $jumlahKendaraan }}
                            </h2>
                        </div>

                        <div class="bg-primary text-white p-3 rounded-3">
                            <i class="bi bi-bicycle fs-3"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card border-0 shadow-sm rounded-4">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>
                            <h6 class="text-muted">
                                Total Pelanggan
                            </h6>

                            <h2 class="fw-bold">
                                {{ $jumlahPelanggan }}
                            </h2>
                        </div>

                        <div class="bg-success text-white p-3 rounded-3">
                            <i class="bi bi-people-fill fs-3"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card border-0 shadow-sm rounded-4">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>
                            <h6 class="text-muted">
                                Total Transaksi
                            </h6>

                            <h2 class="fw-bold">
                                {{ $jumlahTransaksi }}
                            </h2>
                        </div>

                        <div class="bg-warning text-white p-3 rounded-3">
                            <i class="bi bi-receipt fs-3"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Tabel Kendaraan -->
    <div class="card border-0 shadow-sm rounded-4">

        <div class="card-header bg-white border-0 pt-4">

            <h5 class="fw-bold">
                Kendaraan Terbaru
            </h5>

        </div>

        <div class="card-body">

            <table class="table table-hover align-middle">

                <thead class="table-light">

                    <tr>
                        <th>No Polisi</th>
                        <th>Merk</th>
                        <th>Tipe</th>
                        <th>Status</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($kendaraan as $k)

                    <tr>

                        <td>{{ $k->no_polisi }}</td>

                        <td>{{ $k->merk }}</td>

                        <td>{{ $k->tipe }}</td>

                        <td>

                            @if($k->status == 'tersedia')

                                <span class="badge bg-success">
                                    Tersedia
                                </span>

                            @else

                                <span class="badge bg-danger">
                                    Disewa
                                </span>

                            @endif

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection

