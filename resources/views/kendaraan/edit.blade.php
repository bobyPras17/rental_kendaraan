<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kendaraan</title>
</head>
<body>
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Edit Kendaraan</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST">

                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">No Polisi</label>

                    <input type="text"
                           name="no_polisi"
                           value="{{ $kendaraan->no_polisi }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Merk</label>

                    <input type="text"
                           name="merk"
                           value="{{ $kendaraan->merk }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tipe</label>

                    <input type="text"
                           name="tipe"
                           value="{{ $kendaraan->tipe }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tahun</label>

                    <input type="number"
                           name="tahun"
                           value="{{ $kendaraan->tahun }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Warna</label>

                    <input type="text"
                           name="warna"
                           value="{{ $kendaraan->warna }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga Sewa</label>

                    <input type="number"
                           name="harga_sewa"
                           value="{{ $kendaraan->harga_sewa }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>

                    <select name="status" class="form-select">

                        <option value="tersedia"
                            {{ $kendaraan->status == 'tersedia' ? 'selected' : '' }}>
                            Tersedia
                        </option>

                        <option value="disewa"
                            {{ $kendaraan->status == 'disewa' ? 'selected' : '' }}>
                            Disewa
                        </option>

                    </select>
                </div>

                <button type="submit" class="btn btn-primary">
                    Update
                </button>

                <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

@endsection
</body>
</html>