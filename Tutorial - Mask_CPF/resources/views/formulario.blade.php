<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Carregar o JavaScript --}}
    @vite(["resources/js/app.js"])

    <title>Celke</title>
</head>
<body>

    <h1>Formulário com Máscara</h1>
    
    <form action="">

        <label for="cpf">CPF: </label>
        <input type="text" type="cpf" id="cpf" class="cpf"> <br><br>

        <label for="telefone">Telefone: </label>
        <input type="text" type="telefone" id="telefone" class="telefone"> <br><br>

        <button type="button">Enviar</button>

    </form>
    
    
</body>
</html>