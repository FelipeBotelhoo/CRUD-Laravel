<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud-laravel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
        <h2>Tabela de Pessoas</h2>
        <div class="text-right mb-3">
            <a href="/adicionar-pessoa" class="btn btn-success">Adicionar Pessoa</a>
        </div>
        <table class="table table-striped">
        @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <thead>
        <tr>
            <th>ID</th>
            <th class="text-center">Nome</th>
            <th class="text-center">Email</th>
            <th class="text-center">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pessoas as $pessoa)
        <tr>
            <td class="text-center">{{ $pessoa->id }}</td>
            <td class="text-center">{{ $pessoa->nome }}</td>
            <td class="text-center">{{ $pessoa->email }}</td>
            <td class="text-center">
                <a href="/editar-pessoa/{{ $pessoa->id }}" class="btn btn-primary">Editar</a>
                <a href="/remover-pessoa/{{ $pessoa->id }}" class="btn btn-danger">Remover</a>  
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>