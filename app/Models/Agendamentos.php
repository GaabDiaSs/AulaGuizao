<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamentos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'telefone',
        'origem',
        'data_contato',
        'observacao'
    ];
}
