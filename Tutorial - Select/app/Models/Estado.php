<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    // Indicar o nome da tabela 
    protected $table = 'estados';

    // Indicar quais colunas podem ser cadastradas
    protected $fillable = ['nome_estado', 'sigla'];

    // Criar relacionamento entre um e muitos
    public function cidade()
    {
        return $this->hasMany(Cidade::class);
    }
}
