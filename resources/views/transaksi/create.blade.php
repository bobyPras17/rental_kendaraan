<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Tambah Transaksi</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('transaksi.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Pelanggan</label>

                    <select class="form-control mt-2" name="pelanggan_id" id="" required>
                        <option value="">Nama Pelanggan</option>
                            @foreach ($pelanggan as $p)
                        <option value="{{ $p->id }}" class="form-control">{{ $p->nama }}</option>
                            @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kendaraan</label>

                    <select class="form-control mt-2" name="kendaraan_id" id="" required>
                        <option value="">Kendaraan</option>
                            @foreach ($kendaraan as $k)
                        <option value="{{ $k->id }}" class="form-control">{{ $k->tipe }}</option>
                            @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Rental</label>

                    <input type="date"
                           name="tgl_rental"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Kembali</label>

                    <input type="date"
                           name="tgl_kembali"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Total Harga</label>

                    <input type="number"
                           name="total_harga"
                           placeholder="Masukkan Total Harga"
                           class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan
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