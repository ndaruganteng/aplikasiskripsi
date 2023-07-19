<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\carbon;

class tour extends Model
{
    use HasFactory;

    protected $table = 'tour';
    protected $primaryKey = 'id_tour';
    protected $fillable = [
        'image',
        'namabiro',
        'namatour',
        'kategori',
        'highlight',
        'durasi',
        'tanggalberangkat',
        'date',
        'harga',
        'deskripsi',
        'fasilitas',
        'lokasi',
        'status',
    ];

    public function getFromDateAttribute() {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('1, d  F Y');
    }
}
