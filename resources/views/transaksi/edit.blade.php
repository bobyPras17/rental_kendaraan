<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Edit Transaksi</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Pelanggan</label>

                    <select name="pelanggan_id" class="form-select">

                        @foreach($pelanggan as $p)

                            <option value="{{ $p->id }}"
                                {{ $transaksi->pelanggan_id == $p->id ? 'selected' : '' }}>

                                {{ $p->nama }}

                            </option>

                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kendaraan</label>

                    <select name="kendaraan_id" class="form-select">

                        @foreach($kendaraan as $k)

                            <option value="{{ $k->id }}"
                                {{ $transaksi->kendaraan_id == $k->id ? 'selected' : '' }}>

                                {{ $k->merk }}

                            </option>

                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Rental</label>

                    <input type="date"
                           name="tgl_rental"
                           value="{{ $transaksi->tgl_rental }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Kembali</label>

                    <input type="date"
                           name="tgl_kembali"
                           value="{{ $transaksi->tgl_kembali }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Total Harga</label>

                    <input type="number"
                           name="total_harga"
                           value="{{ $transaksi->total_harga }}"
                           class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">
                    Update
                </button>

                <a href="{{ route('transaksi.index') }}"
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