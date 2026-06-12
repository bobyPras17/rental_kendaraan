<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class TransaksiRental extends Model
{
    protected $fillable = [
        'user_id',
        'pelanggan_id',
        'kendaraan_id',
        'tgl_rental',
        'tgl_kembali',
        'total_harga'
    ];

    public function pelanggan()
    {
        return $this->belongsTo(
            Pelanggan::class
        );
    }

    public function kendaraan()
    {
        return $this->belongsTo(
            Kendaraan::class
        );
    }

    public function pengembalian()
    {
        return $this->hasMany(
            Pengembalian::class,
            'transaksi_id'
        );
    }
    public function user()
{
    return $this->belongsTo(
        User::class,
        'user_id'
    );
}
}
