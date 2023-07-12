<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\carbon;

class pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';
    protected $fillable = [
        'namauser',
        'namatour',
        'durasi',
        'hargasatuan',
        'hargatotal',
        'jumlahorang',
        'tanggalberangkat',
        'status',
    ];
}
