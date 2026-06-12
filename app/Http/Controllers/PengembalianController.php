<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;
use App\Models\TransaksiRental;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index()
    {
        $pengembalian = Pengembalian::all();

        return view('pengembalian.index', compact('pengembalian'));
    }

    public function create()
    {
        $transaksi = TransaksiRental::all();

        return view('pengembalian.create', compact('transaksi'));
    }

    public function store(Request $request)
{
    Pengembalian::create([
        'transaksi_id' => $request->transaksi_id,
        'tgl_dikembalikan' => $request->tgl_dikembalikan,
        'denda' => $request->denda,
    ]);

    return redirect()->route('pengembalian.index')
        ->with('success', 'Data pengembalian berhasil ditambahkan.');
}

    public function edit($id)
    {
        $pengembalian = Pengembalian::findOrFail($id);

        $transaksi = TransaksiRental::all();

        return view('pengembalian.edit', compact('pengembalian','transaksi'));
    }

    public function update(Request $request, $id)
    {
        $pengembalian = Pengembalian::findOrFail($id);

        $pengembalian->update($request->all());

        return redirect()->route('pengembalian.index')->with('success', 'Data pengembalian berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Pengembalian::destroy($id);

        return redirect()->route('pengembalian.index')->with('success', 'Data pengembalian berhasil dihapus.');
    }
}