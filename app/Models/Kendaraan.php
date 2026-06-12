<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $fillable = [
        'no_polisi',
        'merk',
        'tipe',
        'tahun',
        'warna',
        'harga_sewa',
        'status'
    ];

    public function transaksi()
    {
        return $this->hasMany(
            TransaksiRental::class
        );
    }
}
