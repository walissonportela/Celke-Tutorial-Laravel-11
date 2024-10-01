<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    // Selecionar cidade combase no ID do estado
    public function selectCidade(Request $request): JsonResponse
    {
        // Recuperar as cidades do banco de dados com base no ID do estado
        $cidades = Cidade::where('estado_id', $request->estado_id)->get(['id', 'nome_cidade']);

        // Verificar se há cidades retornadas
        if ($cidades->isNotEmpty()) {
            return response()->json($cidades, 200); // Retorna as cidades encontradas
        }

        // Retornar erro quando não encontrar nenhuma cidade
        return response()->json([], 200); // Retorna um array vazio para indicar que não há cidades
    }

}
