<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
</head>
<body>
@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Tambah Pelanggan</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('pelanggan.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama</label>

                    <input type="text"
                           name="nama"
                           placeholder="Masukkan Nama"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">No HP</label>

                    <input type="text"
                           name="no_hp"
                           placeholder="Masukkan No HP"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>

                    <textarea name="alamat"
                              placeholder="Masukkan Alamat"
                              class="form-control"
                              rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">No KTP</label>

                    <input type="text"
                           name="ktp"
                           placeholder="Masukkan No KTP"
                           class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

                <a href="{{ route('pelanggan.index') }}"
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