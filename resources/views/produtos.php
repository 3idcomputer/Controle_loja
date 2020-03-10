<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Controle de Estoque</title>
</head>
<body>
<div class="jumbotron">
<h1 class="container">Lista de Produtos</h1>
</div>

<h2 class="container">Produtos em Estoque</h2>
<div class="container">
    <table class="table table-striped table-bordered mt-4">



        <tr class="font-weight-bold font-italic">
            <td>Produto(s)</td>
            <td>Preço R$ </td>
            <td>Descrição</td>
            <td>QTD/Estoque</td>
            <td>Detalhes</td>

        </tr>


            <?php foreach ($produtos as $p): ?>


                <tr>
                    <td><?= $p->nome ?> </td>
                    <td><?= $p->valor ?> </td>
                    <td><?= $p->descricao ?> </td>
                    <td><?= $p->quantidade ?> </td>
                    <td>
                        <a href="/produtos/mostra">
                            Visualizar
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
</table>

    <a href="/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Voltar</a> </button>
</div>

</body>
</html>
