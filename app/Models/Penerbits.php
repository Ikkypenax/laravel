<?php

namespace App\Models;

use App\Models\Penerbits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penerbits extends Model
{
    use HasFactory;
    protected $fillable = [
        'penerbit',
    ];
}
