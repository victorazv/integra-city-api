<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class centralTelefones extends Model
{
    use HasFactory;

    protected $fillable = ['local', 'numero', 'pessoa_referencia'];
}
