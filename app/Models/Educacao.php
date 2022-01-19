<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educacao extends Model
{
    use HasFactory;
    protected $table = 'educacao';

    protected $fillable = [
        'titulo',
        'subtitulo',
        'texto',
        'imagem',
    ];
}
