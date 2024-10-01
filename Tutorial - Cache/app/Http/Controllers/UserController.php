<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    // Listar os usuários  
    public function index(){

        // Armazenar dados no cache
        $tempo_de_cache = 60;
        $valor_do_cache = "Cesar";
        Cache::put('chave-do-cache', $valor_do_cache, $tempo_de_cache);

        // Recuperando dados do cache
        // $valor_do_cache = Cache::get('chave-do-cache');

        // Recuperar os dados do cache, se não existir criar o mesmo
        $valor_do_cache = Cache::remember('chave-do-cache', $tempo_de_cache,
        function(){
            return "Cesar 2";
        });

        // Recuperar os registros do bancos de dados
        // $users = User::orderBy('id', 'ASC')->get();

        // Recuperar dados do cache, se não existir, criar o mesmo
        $users = Cache::remember('users', 60, function(){
             
            // Recuperar os registros do banco de dados
            return User::orderBy('id', 'DESC')->get( );
        });

        // Carregar a VIEW
        return view('users.index', ['valor_do_cache' => $valor_do_cache, 'users' => $users]);

    }
}
