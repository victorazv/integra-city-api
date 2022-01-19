<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CanalDaMulher extends Model
{
    use HasFactory;
    protected $table = 'canal_da_mulher';

    protected $fillable = [
        'texto',
        'endereco',
        'telefone',
        'imagem',
    ];
}
