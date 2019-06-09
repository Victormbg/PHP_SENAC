<html>
    <head>
        <meta charset="utf-8" />
        <title>Gerenciador de Estacionamento</title>
        <link rel="stylesheet" href="tarefas.css" type="text/css" />
    </head>
    <body>
        <h1>Gerenciador de Estacionamento</h1>

        <?php include('formulario.php'); ?>

        <?php if ($exibir_tabela) : ?>
            <?php include('tabela.php'); ?>
        <?php endif; ?>
    </body>
</html>