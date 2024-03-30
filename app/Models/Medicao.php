<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicao extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'numero_equipe',
        'nome_equipe',
        'etapa',
        'peixe_1',
        'peixe_2',
        'peixe_3',
        'peixe_4',
        'peixe_5',
        'peixe_6',
        'peixe_7',
        'peixe_8',
        'peixe_9',
        'penalidade_1',
        'penalidade_2',
        'penalidade_3',
        'penalidade_4',
        'penalidade_5',
        'total_peixes',
        'total_penalidades',
        'total',
        'total_desempate',
        'data',
        'usuario'
    ];


}
