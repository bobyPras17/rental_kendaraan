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
            <h4 class="mb-0">Tambah Pengembalian</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('pengembalian.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">id transaksi</label>

                    <select class="form-control mt-2" name="transaksi_id" id="" required>
                        <option value="">id transaksi</option>
                            @foreach ($transaksi as $t)
                        <option value="{{ $t->id }}" class="form-control">{{ $t->id }}</option>
                            @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Dikembalikan</label>

                    <input type="date"
                           name="tgl_dikembalikan"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Denda</label>

                    <input type="number"
                           name="denda"
                           placeholder="Masukkan Denda"
                           class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

                <a href="{{ route('pengembalian.index') }}"
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