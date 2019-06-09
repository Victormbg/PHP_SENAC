<html>
    <head>
        <meta charset="utf-8" />
        <title>Estacionamento</title>
        <link rel="stylesheet" href="tarefas.css" type="text/css" />
    </head>
    <body>
        <h1>Estacionamento</h1>

        <?php include('formulario.php'); ?>

        <?php if ($exibir_estacionamento) : ?>
            <?php include('tarefas.php'); ?>
        <?php endif; ?>
    </body>
</html>