<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    protected $fillable = [
        'transaksi_id',
        'tgl_dikembalikan',
        'denda'
    ];

    public function transaksi()
    {
        return $this->belongsTo(
            TransaksiRental::class,
            'transaksi_id'
        );
    }
}
