<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Estado;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        return view('users.index');
    }

    // Exibir o formulário de cadastro do usuário
    public function create(){

        // Recuperar o registro do banco de dados
        $estado = Estado::orderBy('nome_estado', 'ASC')->get();

        return view('users.create', ['estados' => $estado]);
    }

    // Cadastrar novo usuário no banco de dados 
    public function store(UserRequest $request)
    {
        // Validar o formulário
        $request->validated();

    }
}
