<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gost extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'password',
        'br_lk',
    ];

    //jedan gost moze iznajmiti vise soba
    public function iznajmljivanja()
    {
        return $this->hasMany(Iznajmljivanje::class);
    }
    
}
