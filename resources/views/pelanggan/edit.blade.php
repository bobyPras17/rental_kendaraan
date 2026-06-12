<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan</title>
</head>
<body>
@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Edit Pelanggan</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama</label>

                    <input type="text"
                           name="nama"
                           value="{{ $pelanggan->nama }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">No HP</label>

                    <input type="text"
                           name="no_hp"
                           value="{{ $pelanggan->no_hp }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>

                    <textarea name="alamat"
                              class="form-control"
                              rows="4">{{ $pelanggan->alamat }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">No KTP</label>

                    <input type="text"
                           name="ktp"
                           value="{{ $pelanggan->ktp }}"
                           class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">
                    Update
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