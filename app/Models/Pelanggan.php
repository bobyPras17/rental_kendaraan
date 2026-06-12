<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $fillable = [
        'nama',
        'no_hp',
        'alamat',
        'ktp'
    ];

    public function transaksi()
    {
        return $this->hasMany(
            TransaksiRental::class
        );
    }
}
