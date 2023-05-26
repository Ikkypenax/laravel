<?php

namespace App\Models;

use App\Models\Penerbits;
use App\Models\Kategoris;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Books extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_buku',
        'deskripsi',
        'author',
        'kategori_id',
        'penerbit_id'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategoris::class, 'kategori_id', 'id');
    }

    public function penerbit(){
        return $this->belongsTo(Penerbits::class, 'penerbit_id', 'id');
    }
}
