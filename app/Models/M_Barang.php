<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class M_Barang extends Model
{
    use SoftDeletes;

    protected $table = 'databarang';
    protected $fillable = [

        'Nama_Barang',
        'stok',
        'Jumlah_Terjual',
        'Tanggal_Transaksi',
        'Jenis_Barang',

    ];
    protected $hidden;
}
