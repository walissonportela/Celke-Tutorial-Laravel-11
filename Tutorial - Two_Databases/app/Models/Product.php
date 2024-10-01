<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Indicar qual conexão com o banco de dados deve ser utilizado
    protected $connection = 'mysql_secundaria';

    protected $fillable = [
        'name'
    ];
}
