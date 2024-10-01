<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnviarSmsController extends Controller
{
    //
    public function enviarSms(){

        // Use seus dados IagenteSMS
        $usuarioIagente = "****";
        $senhaIagente = urlencode("****");
        $celular = "****";
        
        $nome = 'Walisson';

        // Codifica os dados no formato de um formulário www
        $mensagem = urlencode("$nome, Seu código de verificação é 123.");

        // Concatena a url da api com a variável carregando o conteúdo da mensagem
        $url_api = "https://api.iagentesms.com.br/webservices/http.php?metodo=envio&usuario=$usuarioIagente&senha=$senhaIagente&celular=$celular&mensagem={$mensagem}";

        // realiza a requisição http passando os parâmetros informados
        $api_http = file_get_contents($url_api);

        // imprime o resultado da requisição
        echo $api_http;
    } 
}
