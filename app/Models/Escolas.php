<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escolas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'endereco',
        'texto',
        'imagem',
        'latitude',
        'longitude',
    ];
}
