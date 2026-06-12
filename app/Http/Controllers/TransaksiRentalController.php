<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Pelanggan;
use App\Models\TransaksiRental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiRentalController extends Controller
{
    public function index()
    {
        $transaksi = TransaksiRental::all();

        return view('transaksi.index',compact('transaksi'));
    }

    public function create()
    {
        $pelanggan = Pelanggan::all();

        $kendaraan = Kendaraan::all();

        return view('transaksi.create',compact('pelanggan','kendaraan'));
    }

    public function store(Request $request)
    {
        TransaksiRental::create([
            'user_id' => Auth::id(),
            'pelanggan_id' => $request->pelanggan_id,
            'kendaraan_id' => $request->kendaraan_id,
            'tgl_rental' => $request->tgl_rental,
            'tgl_kembali' => $request->tgl_kembali,
            'total_harga' => $request->total_harga,
        ]);
        return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $transaksi = TransaksiRental::findOrFail($id);

        $pelanggan = Pelanggan::all();

        $kendaraan = Kendaraan::all();

        return view('transaksi.edit', compact('transaksi', 'pelanggan', 'kendaraan'));
    }

    public function update(Request $request, $id)
    {
        $transaksi = TransaksiRental::findOrFail($id);

        $transaksi->update($request->all());

        return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        TransaksiRental::destroy($id);

        return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil dihapus.');
    }
}