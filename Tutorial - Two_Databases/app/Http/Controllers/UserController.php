<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        // Recuperar os registros dos bancos de dados
        $users = User::get();

        return view('users.index', ['users' => $users]); 
    }
}
