<?php

namespace App\Models;

use App\Models\Kategoris;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategoris extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama'
    ];
    
}
