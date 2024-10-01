<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/js/app.js')

    <title>Celke</title>
</head>
<body>

    <a href="{{ route('users.index')}}">Listar</a>

    <h2>
        Cadastrar usuários
    </h2>

    {{-- Acrescentar componente do alerta --}}
    <x-alert/>

    <form action="" method="post">
        @csrf

        <label for="">Estado: </label>
        <select name="estado_id" id="estado_id">
            <option value="">Selecione</option>
            @forelse ($estados as $estado)
                <option value="{{ $estado->id}}">{{ $estado->nome_estado }}</option>
            @empty
                
            @endforelse
        </select> <br><br>

        <label for="">Cidade: </label>
        <select name="cidade_id" id="cidade_id">
            <option value="">Selecione</option>
        </select> <br><br>

        <label for="">Nome: </label>
        <input type="text" name="name" id="name" placeholder="Nome completo"> <br><br>

        <label for="">E-Mail: </label>
        <input type="email" name="email" id="email" placeholder="Melhor email"> <br><br>

        <label for="">Senha: </label>
        <input type="password" name="password" id="password" placeholder="Senha com no mínimo 6 caractéres"> <br><br>

        <button type="submit">Salvar</button> <br><br>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            // Receber os seletores do HTML
            var inputSelectEstado = document.querySelector('#estado_id');
            var inputSelectCidade = document.querySelector('#cidade_id');

            // Aguardar o usuário selecionar o estado
            inputSelectEstado.addEventListener('change', () => {
                pesquisarCidade();
            });

            function pesquisarCidade() {
                inputSelectCidade.innerHTML = `<option value="">Carregando...</option>`;

                var selectCidades = "{{ route('cidades.select') }}";

                axios.post(selectCidades, {
                    estado_id: inputSelectEstado.value,
                }).then(response => {
                    console.log(response.data); // Log para verificar o que está sendo retornado

                    inputSelectCidade.innerHTML = `<option value="">Selecione</option>`;

                    response.data.forEach(row => {
                        inputSelectCidade.innerHTML += `<option value="${row.id}">${row.nome_cidade}</option>`;
                    });
                }).catch(error => {
                    console.error("Erro ao carregar cidades:", error); // Log de erro
                    inputSelectCidade.innerHTML = `<option value="">Erro ao carregar cidades</option>`;
                });
            }

        })
    </script>
 
    
</body>
</html>
