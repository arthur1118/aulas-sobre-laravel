<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculos extends Model
{
    use HasFactory;

    //Especifique o nome da tabela do banco de dados 
    protected $table = 'veiculos';

    //Colunas da tabela acima:
    protected $fillable = [
        //tipo array
        'marca', 'modelo', 'ano'
    ];

}
