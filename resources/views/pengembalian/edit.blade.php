<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengembalian</title>
</head>
<body>
@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Edit Pengembalian</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('pengembalian.update', $pengembalian->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Transaksi</label>

                    <select name="transaksi_id" class="form-select">

                        @foreach($transaksi as $t)

                            <option value="{{ $t->id }}"
                                {{ $pengembalian->transaksi_id == $t->id ? 'selected' : '' }}>

                                Transaksi #{{ $t->id }}

                            </option>

                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Dikembalikan</label>

                    <input type="date"
                           name="tgl_dikembalikan"
                           value="{{ $pengembalian->tgl_dikembalikan }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Denda</label>

                    <input type="number"
                           name="denda"
                           value="{{ $pengembalian->denda }}"
                           class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">
                    Update
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