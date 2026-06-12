<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kendaraan</title>
</head>
<body>
@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Tambah Kendaraan</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('kendaraan.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">No Polisi</label>

                    <input type="text"
                           name="no_polisi"
                           placeholder="Masukkan No Polisi"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Merk</label>

                    <input type="text"
                           name="merk"
                           placeholder="Masukkan Merk"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tipe</label>

                    <input type="text"
                           name="tipe"
                           placeholder="Masukkan Tipe"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tahun</label>

                    <input type="number"
                           name="tahun"
                           placeholder="Masukkan Tahun"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Warna</label>

                    <input type="text"
                           name="warna"
                           placeholder="Masukkan Warna"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga Sewa</label>

                    <input type="number"
                           name="harga_sewa"
                           placeholder="Masukkan Harga Sewa"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>

                    <select name="status" class="form-select">
                        <option value="tersedia">
                            Tersedia
                        </option>
                        <option value="disewa">
                            Disewa
                        </option>

                    </select>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

                <a href="{{ route('kendaraan.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

@endsection
</body>
</html>