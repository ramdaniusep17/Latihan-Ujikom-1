<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListArticle extends Model
{
    use HasFactory;

    protected $table = 'listarticles';

    protected $fillable = [
        'tanggal',
        'judul',
        'deskripsi',
        'gambar',
    ];
}
