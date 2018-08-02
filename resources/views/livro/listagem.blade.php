<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de livros</title>
</head>
<body>
    <h1>Listagem de livros</h1>

    <table>
        <tr>
            <th>Nome</th>
            <th>Autor</th> 
            <th>Valor</th>
            <th>Quantidade</th>
        </tr>

        <?php foreach ($livros as $livro) : ?>
            <tr>
                <td><?= $livro->nome ?></td>
                <td><?= $livro->autor ?></td>
                <td><?= $livro->valor ?></td>
                <td><?= $livro->quantidade ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>