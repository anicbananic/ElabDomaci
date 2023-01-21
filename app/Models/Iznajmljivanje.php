<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iznajmljivanje extends Model
{
    use HasFactory;

    protected $fillable = [
        'gost_id',
        'soba_id',
        'datum_od',
        'datum_do',
    ];
    //vezujemo 1 sobu za 1 iznajmljivanje
    public function soba()
    {
        return $this->belongsTo(Soba::class);
    }
    //vezujemo 1 gosta za 1 sobu
    public function gost()
    {
        return $this->belongsTo(Gost::class);
    }
}
