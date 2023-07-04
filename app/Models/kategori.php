<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\carbon;

class kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $fillable = [
        'image',
        'namakategori',
    ];
}
