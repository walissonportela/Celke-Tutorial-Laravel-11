<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Celke</title>
</head>
<body>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-Mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <th>{{$user->id}}</th>
                    <th>{{$user->name}}</th>
                    <th>{{$user->email}}</th>
                    <td>

                    </td>
                </tr>
            @empty
                <div>Nenhum usuário encontrado!</div>
            @endforelse
        </tbody>
    </table>
    
</body>
</html>