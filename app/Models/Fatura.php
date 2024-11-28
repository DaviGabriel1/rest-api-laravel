<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fatura extends Model
{
    /** @use HasFactory<\Database\Factories\FaturaFactory> */
    use HasFactory;

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}
