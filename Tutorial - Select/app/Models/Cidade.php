<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    // Indicar o nome da tabela 
    protected $table = 'cidades';

    // Indicar quais colunas podem ser cadastradas
    protected $fillable = ['nome_cidade', 'sigla'];

    // Criar relacionamento entre um e muitos
    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
