<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <title>Listagem de livros</title>
</head>
<body>
<div class="container">
    <h1>Listagem de livros</h1>

    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>Nome</th>
            <th>Autor</th> 
            <th>Valor</th>
            <th>Quantidade</th>
            <th>Editar</th>
            <th>Remover</th>
        </tr>

        <?php foreach ($livros as $livro) : ?>
            <tr>
                <td><?= $livro->nome ?></td>
                <td><?= $livro->autor ?></td>
                <td><?= $livro->valor ?></td>
                <td><?= $livro->quantidade ?></td>
                <td>
                    <form action="/livros/editar/<?= $livro->id ?>" method="post">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </form>
                </td>
                <td>
                    <form action="/livros/remover/<?= $livro->id ?>" method="post">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger" value="Remover">
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>
</body>
</html>